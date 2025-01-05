<?php

namespace App\Core\FileSystem;

use App\Core\Contracts\FileManagerContract;
use App\Core\Facades\Config;
use Aws\S3\S3Client;
use Google\Cloud\Storage\StorageClient;
use League\Flysystem\AwsS3V3\AwsS3V3Adapter;
use League\Flysystem\Filesystem;
use League\Flysystem\FilesystemException;
use League\Flysystem\FilesystemOperator;
use League\Flysystem\GoogleCloudStorage\GoogleCloudStorageAdapter;
use League\Flysystem\Local\LocalFilesystemAdapter;

class FileManager implements FileManagerContract
{
    protected static ?FileManager $instance = null;
    protected array $disks = [];
    protected FilesystemOperator $currentDisk;

    public function __construct()
    {

    }

    public static function getInstance(): self
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getDisk()
    {
        if (is_null($this->currentDisk)) {
            $this->initializeDisk();
        }

        return $this->currentDisk;
    }

    public function initializeDisk()
    {
        $config = Config::get('filesystems', []);
        foreach ($config['disks'] as $disk => $settings) {
            $this->registerDisk($disk, $settings);
        }

        $defaultDisk = $config['default'] ?? 'local';
        $this->disk($defaultDisk);
    }

    protected function registerDisk(string $name, array $settings): void
    {
        $adapter = null;
        switch ($settings['adapter']) {
            case "local":
                try {
                    $adapter = new LocalFilesystemAdapter($settings['root']);
                } catch (\Exception $exception) {
                    break;
                }
                break;

            case "s3":
                try {
                    $client = new S3Client([
                        'credentials' => [
                            'key' => $settings['key'],
                            'secret' => $settings['secret'],
                        ],
                        'region' => $settings['region'],
                        'version' => 'latest',
                    ]);
                    $adapter = new AwsS3V3Adapter($client, $settings['bucket']);
                } catch (\Exception $exception) {
                    break;
                }
                break;

            case "gcs":
                try {
                    $storageClient = new StorageClient([
                        'projectId' => $settings['project_id'],
                        'keyFilePath' => $settings['key_file'],
                    ]);
                    $bucket = $storageClient->bucket($settings['bucket']);
                    $adapter = new GoogleCloudStorageAdapter($bucket);
                } catch (\Exception $exception) {
                    break;
                }
                break;

            default:
                throw new \InvalidArgumentException("Unsupported adapter: {$settings['adapter']}");
        }
        if ($adapter) {
            $this->disks[$name] = new Filesystem($adapter);
        }
    }

    public function disk(string $disk): void
    {
        if (!isset($this->disks[$disk])) {
            throw new \InvalidArgumentException("Disk '{$disk}' is not configured.");
        }

        $this->currentDisk = $this->disks[$disk];
    }

    public function validateFile($file): bool
    {
        if (!is_file($file) || filesize($file) > 10 * 1024 * 1024) { // محدودیت به 10MB
            return false;
        }

        return true;
    }

    public function upload($file, string $path): string
    {
        if (!$this->validateFile($file)) {
            throw new \InvalidArgumentException("Invalid file provided.");
        }

        $stream = fopen($file, 'r+');
        $this->currentDisk->writeStream($path, $stream);
        fclose($stream);

        return $path;
    }

    public function delete(string $path): bool
    {
        if (!$this->fileExists($path)) {
            return false;
        }

        try {
            $this->currentDisk->delete($path);
            return true;
        } catch (FilesystemException $e) {
            return false;
        }
    }

    public function getUrl(string $path): string
    {
        if (method_exists($this->currentDisk, 'getUrl')) {
            return $this->currentDisk->getUrl($path);
        }

        return asset($path);
    }

    public function createDirectory(string $directory): bool
    {
        try {
            $this->currentDisk->createDirectory($directory);
            return true;
        } catch (FilesystemException $e) {
            return false;
        }
    }

    public function deleteDirectory(string $directory): bool
    {
        try {
            $this->currentDisk->deleteDirectory($directory);
            return true;
        } catch (FilesystemException $e) {
            return false;
        }
    }

    public function listFiles(string $directory): \League\Flysystem\DirectoryListing
    {
        return $this->currentDisk->listContents($directory);
    }

    public function fileExists(string $path): bool
    {
        return $this->currentDisk->fileExists($path);
    }

    public function __call($method, $arguments)
    {
        $disk = $this->getDisk();
        if (!method_exists($disk, $method)) {
            throw new \BadMethodCallException("Method '{$method}' does not exist on the current disk.");
        }

        return call_user_func_array([$disk, $method], $arguments);
    }
}