<?php
// GENERATED CODE -- DO NOT EDIT!

namespace App\Core\Grpc\Clients;

/**
 * service
 */
class ModuleGroupServiceClient extends \App\Core\Grpc\BaseStub
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
     * @param \App\Core\Grpc\Models\CreateModuleGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\CreateModuleGroupResponse
     */
    public function CreateModuleGroup(\App\Core\Grpc\Models\CreateModuleGroupRequest $argument,
                                                                                     $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.ModuleGroupService/CreateModuleGroup',
            $argument,
            ['\App\Core\Grpc\Models\CreateModuleGroupResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param \App\Core\Grpc\Models\UpdateModuleGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\UpdateModuleGroupResponse
     */
    public function UpdateModuleGroup(\App\Core\Grpc\Models\UpdateModuleGroupRequest $argument,
                                                                                     $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.ModuleGroupService/UpdateModuleGroup',
            $argument,
            ['\App\Core\Grpc\Models\UpdateModuleGroupResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param \App\Core\Grpc\Models\DeleteModuleGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\DeleteModuleGroupResponse
     */
    public function DeleteModuleGroup(\App\Core\Grpc\Models\DeleteModuleGroupRequest $argument,
                                                                                     $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.ModuleGroupService/DeleteModuleGroup',
            $argument,
            ['\App\Core\Grpc\Models\DeleteModuleGroupResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param \App\Core\Grpc\Models\IndexModuleGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\IndexModuleGroupsResponse
     */
    public function IndexModuleGroups(\App\Core\Grpc\Models\IndexModuleGroupRequest $argument,
                                                                                    $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.ModuleGroupService/IndexModuleGroups',
            $argument,
            ['\App\Core\Grpc\Models\IndexModuleGroupsResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param \App\Core\Grpc\Models\GetModuleGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\GetModuleGroupResponse
     */
    public function GetModuleGroup(\App\Core\Grpc\Models\GetModuleGroupRequest $argument,
                                                                               $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.ModuleGroupService/GetModuleGroup',
            $argument,
            ['\App\Core\Grpc\Models\GetModuleGroupResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param \App\Core\Grpc\Models\IndexModuleGroupModulesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\IndexModuleGroupModulesResponse
     */
    public function IndexModuleGroupModules(\App\Core\Grpc\Models\IndexModuleGroupModulesRequest $argument,
                                                                                                 $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.ModuleGroupService/IndexModuleGroupModules',
            $argument,
            ['\App\Core\Grpc\Models\IndexModuleGroupModulesResponse', 'decode'],
            $metadata, $options);
    }

}
