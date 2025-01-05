<?php
// GENERATED CODE -- DO NOT EDIT!

namespace App\Core\Grpc\Clients;

/**
 * service
 */
class ModuleServiceClient extends \App\Core\Grpc\BaseStub
{

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname = null, $opts = null, $channel = null)
    {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \App\Core\Grpc\Models\CreateModuleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\CreateModuleResponse
     */
    public function CreateModule(\App\Core\Grpc\Models\CreateModuleRequest $argument,
                                                                           $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.ModuleService/CreateModule',
            $argument,
            ['\App\Core\Grpc\Models\CreateModuleResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param \App\Core\Grpc\Models\UpdateModuleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\UpdateModuleResponse
     */
    public function UpdateModule(\App\Core\Grpc\Models\UpdateModuleRequest $argument,
                                                                           $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.ModuleService/UpdateModule',
            $argument,
            ['\App\Core\Grpc\Models\UpdateModuleResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param \App\Core\Grpc\Models\DeleteModuleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\DeleteModuleResponse
     */
    public function DeleteModule(\App\Core\Grpc\Models\DeleteModuleRequest $argument,
                                                                           $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.ModuleService/DeleteModule',
            $argument,
            ['\App\Core\Grpc\Models\DeleteModuleResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param \App\Core\Grpc\Models\IndexModuleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\IndexModulesResponse
     */
    public function IndexModules(\App\Core\Grpc\Models\IndexModuleRequest $argument,
                                                                          $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.ModuleService/IndexModules',
            $argument,
            ['\App\Core\Grpc\Models\IndexModulesResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param \App\Core\Grpc\Models\GetModuleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\GetModuleResponse
     */
    public function GetModule(\App\Core\Grpc\Models\GetModuleRequest $argument,
                                                                     $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.ModuleService/GetModule',
            $argument,
            ['\App\Core\Grpc\Models\GetModuleResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param \App\Core\Grpc\Models\IndexModuleSubModulesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\IndexModuleSubModulesResponse
     */
    public function IndexModuleSubModules(\App\Core\Grpc\Models\IndexModuleSubModulesRequest $argument,
                                                                                             $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.ModuleService/IndexModuleSubModules',
            $argument,
            ['\App\Core\Grpc\Models\IndexModuleSubModulesResponse', 'decode'],
            $metadata, $options);
    }

}
