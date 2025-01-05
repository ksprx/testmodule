<?php
// GENERATED CODE -- DO NOT EDIT!

namespace App\Core\Grpc\Clients;

/**
 * service
 */
class RoleServiceClient extends \App\Core\Grpc\BaseStub
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
     * @param \App\Core\Grpc\Models\CreateRoleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\CreateRoleResponse
     */
    public function CreateRole(\App\Core\Grpc\Models\CreateRoleRequest $argument,
                                                                       $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.RoleService/CreateRole',
            $argument,
            ['\App\Core\Grpc\Models\CreateRoleResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param \App\Core\Grpc\Models\UpdateRoleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\UpdateRoleResponse
     */
    public function UpdateRole(\App\Core\Grpc\Models\UpdateRoleRequest $argument,
                                                                       $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.RoleService/UpdateRole',
            $argument,
            ['\App\Core\Grpc\Models\UpdateRoleResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param \App\Core\Grpc\Models\DeleteRoleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\DeleteRoleResponse
     */
    public function DeleteRole(\App\Core\Grpc\Models\DeleteRoleRequest $argument,
                                                                       $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.RoleService/DeleteRole',
            $argument,
            ['\App\Core\Grpc\Models\DeleteRoleResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param \App\Core\Grpc\Models\IndexRolesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\IndexRolesResponse
     */
    public function IndexRoles(\App\Core\Grpc\Models\IndexRolesRequest $argument,
                                                                       $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.RoleService/IndexRoles',
            $argument,
            ['\App\Core\Grpc\Models\IndexRolesResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param \App\Core\Grpc\Models\IndexRoleSubModulesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\IndexRoleSubModulesResponse
     */
    public function IndexRoleSubModules(\App\Core\Grpc\Models\IndexRoleSubModulesRequest $argument,
                                                                                         $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.RoleService/IndexRoleSubModules',
            $argument,
            ['\App\Core\Grpc\Models\IndexRoleSubModulesResponse', 'decode'],
            $metadata, $options);
    }

}
