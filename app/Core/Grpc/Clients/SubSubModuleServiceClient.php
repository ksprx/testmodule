<?php
// GENERATED CODE -- DO NOT EDIT!

namespace App\Core\Grpc\Clients;

/**
 * service
 */
class SubSubModuleServiceClient extends \App\Core\Grpc\BaseStub
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
     * @param \App\Core\Grpc\Models\CreateSubModuleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\CreateSubModuleResponse
     */
    public function CreateSubModule(\App\Core\Grpc\Models\CreateSubModuleRequest $argument,
                                                                                 $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.SubSubModuleService/CreateSubModule',
            $argument,
            ['\App\Core\Grpc\Models\CreateSubModuleResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param \App\Core\Grpc\Models\UpdateSubModuleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\UpdateSubModuleResponse
     */
    public function UpdateSubModule(\App\Core\Grpc\Models\UpdateSubModuleRequest $argument,
                                                                                 $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.SubSubModuleService/UpdateSubModule',
            $argument,
            ['\App\Core\Grpc\Models\UpdateSubModuleResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param \App\Core\Grpc\Models\DeleteSubModuleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\DeleteSubModuleResponse
     */
    public function DeleteSubModule(\App\Core\Grpc\Models\DeleteSubModuleRequest $argument,
                                                                                 $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.SubSubModuleService/DeleteSubModule',
            $argument,
            ['\App\Core\Grpc\Models\DeleteSubModuleResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param \App\Core\Grpc\Models\IndexSubModuleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\IndexSubModulesResponse
     */
    public function IndexSubModules(\App\Core\Grpc\Models\IndexSubModuleRequest $argument,
                                                                                $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.SubSubModuleService/IndexSubModules',
            $argument,
            ['\App\Core\Grpc\Models\IndexSubModulesResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param \App\Core\Grpc\Models\GetSubModuleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\GetSubModuleResponse
     */
    public function GetSubModule(\App\Core\Grpc\Models\GetSubModuleRequest $argument,
                                                                           $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.SubSubModuleService/GetSubModule',
            $argument,
            ['\App\Core\Grpc\Models\GetSubModuleResponse', 'decode'],
            $metadata, $options);
    }

}
