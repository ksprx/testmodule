<?php

namespace App\Core\Application;

use App\Core\Config\Config;
use App\Core\Console\CLIKernel;
use App\Core\Kernel\Kernel;
use App\Core\Request\Request;
use App\Core\Response\Response;
use App\Http\Providers\ServiceProvider;
use App\Http\Services\ServiceContainer;
use Dotenv\Dotenv;
use Exception;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\ConsoleOutput;

class Application
{
    private static ?Application $instance = null;
    protected ServiceContainer $container;
    protected Config $config;
    protected array $providers = [];

    public function __construct()
    {
        $this->defineConstants();
        $this->initEnv();
        $this->init();
        $this->container = new ServiceContainer();
        $this->config = new Config(CONFIG_PATH);
    }

    protected function initEnv(): void
    {
        $dotenv = Dotenv::createImmutable(AMADAY_PATH);
        $dotenv->load();
    }

    public static function getInstance(): Application
    {
        if (self::$instance === null) {
            self::$instance = new Application();
        }

        return self::$instance;
    }

    public static function setInstance(Application $application): Application
    {
        if (self::$instance === null) {
            self::$instance = $application;
        }

        return self::$instance;
    }

    private function defineConstants(): void
    {
        define('AMADAY_PATH', dirname(__DIR__, 3));
        define('APP_PATH', AMADAY_PATH);
        define('MODULE_PATH', AMADAY_PATH . '/app/Modules');
        define('CONFIG_PATH', AMADAY_PATH . '/config');
        define('STORAGE_PATH', AMADAY_PATH . '/storage');
        define('PUBLIC_PATH', AMADAY_PATH . '/public');
    }

    public function initialize(): void
    {
        $this->registerConfiguredProviders();
        $this->registerModuleProviders();
        $this->bootProviders();
    }

    /**
     *
     * @param string $abstract
     * @param callable|string $concrete
     */
    public function bind(string $abstract, callable|string $concrete): void
    {
        $this->container->bind($abstract, $concrete);
    }

    /**
     *
     * @param string $abstract
     * @param callable|string $concrete
     */
    public function singleton(string $abstract, callable|string $concrete): void
    {
        $this->container->singleton($abstract, $concrete);
    }

    /**
     *
     * @param string $abstract
     * @return mixed
     * @throws Exception
     */
    public function resolve(string $abstract): mixed
    {
        return $this->container->resolve($abstract);
    }

    /**
     *
     * @param string $key
     * @param mixed|null $default
     * @return mixed
     */
    public function config(string $key, mixed $default = null): mixed
    {
        return $this->config->get($key, $default);
    }

    /**
     * Register and boot یک Service Provider
     *
     * @param ServiceProvider $provider
     */
    public function registerProvider(ServiceProvider $provider): void
    {
        $provider->register();
        $this->providers[] = $provider;
    }

    /**
     * Register all Service Providers
     */
    protected function registerConfiguredProviders(): void
    {
        $providers = require CONFIG_PATH . '/providers.php';

        foreach ($providers as $providerClass) {
            $provider = new $providerClass($this);
            $this->registerProvider($provider);
        }
    }

    /**
     * Register all Modules Service Providers
     */
    protected function registerModuleProviders(): void
    {
        $modulesBaseDir = AMADAY_PATH . '/app/Modules';
        if (is_dir($modulesBaseDir)) {
            $moduleDirectories = glob($modulesBaseDir . '/*', GLOB_ONLYDIR);
            foreach ($moduleDirectories as $moduleDir) {
                $moduleName = basename($moduleDir);
                $providerClass = "App\\Modules\\{$moduleName}\\{$moduleName}ServiceProvider";

                if (class_exists($providerClass)) {
                    $providerInstance = new $providerClass($this);
                    $this->registerProvider($providerInstance);
                }
            }
        }
    }

    /**
     * Boot all Service Providers
     */
    public function bootProviders(): void
    {
        foreach ($this->providers as $provider) {
            $provider->boot();
        }
    }

    public function loadKernels(): void
    {
        $kernels = [
            CLIKernel::class,
            Kernel::class,
        ];
        foreach ($kernels as $kernel) {
            $this->singleton($kernel, $kernel);
        }
    }

    /**
     * @throws Exception
     */
    public function handleCommand(InputInterface $input)
    {
        $kernel = $this->make(CLIKernel::class);

        $status = $kernel->handle(
            $input,
            new ConsoleOutput
        );

//        $kernel->terminate($input, $status);

        return $status;
    }

    public function handleRequest(Request $request): void
    {
        try {
            $response = $this->resolve(Kernel::class)->handle($request);
            //TODO
//            $this->applyMiddlewares($request, $response);
        } catch (Exception $e) {
            $response = new Response($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        $response->send();
    }

    /**
     * @throws Exception
     */
    public function make($abstract)
    {
        return $this->container->resolve($abstract);
    }

    public function init()
    {
        require_once AMADAY_PATH . DIRECTORY_SEPARATOR . 'app/Core/Support/helpers.php';
    }

    public static function Configure()
    {
        return (new ApplicationBuilder(new static()))
            ->withKernels();
    }
}
