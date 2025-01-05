<?php
// GENERATED CODE -- DO NOT EDIT!

namespace App\Core\Grpc\Clients;

/**
 * service
 */
class RoleAccessSettingServiceClient extends \App\Core\Grpc\BaseStub
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
     * @param \App\Core\Grpc\Models\CreateRoleAccessSettingRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\CreateRoleAccessSettingResponse
     */
    public function CreateRoleAccessSetting(\App\Core\Grpc\Models\CreateRoleAccessSettingRequest $argument,
                                                                                                 $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.RoleAccessSettingService/CreateRoleAccessSetting',
            $argument,
            ['\App\Core\Grpc\Models\CreateRoleAccessSettingResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param \App\Core\Grpc\Models\UpdateRoleAccessSettingRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\UpdateRoleAccessSettingResponse
     */
    public function UpdateRoleAccessSetting(\App\Core\Grpc\Models\UpdateRoleAccessSettingRequest $argument,
                                                                                                 $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.RoleAccessSettingService/UpdateRoleAccessSetting',
            $argument,
            ['\App\Core\Grpc\Models\UpdateRoleAccessSettingResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param \App\Core\Grpc\Models\DeleteRoleAccessSettingRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\DeleteRoleAccessSettingResponse
     */
    public function DeleteRoleAccessSetting(\App\Core\Grpc\Models\DeleteRoleAccessSettingRequest $argument,
                                                                                                 $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.RoleAccessSettingService/DeleteRoleAccessSetting',
            $argument,
            ['\App\Core\Grpc\Models\DeleteRoleAccessSettingResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param \App\Core\Grpc\Models\IndexRoleAccessSettingRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\IndexRoleAccessSettingsResponse
     */
    public function IndexRoleAccessSettings(\App\Core\Grpc\Models\IndexRoleAccessSettingRequest $argument,
                                                                                                $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.RoleAccessSettingService/IndexRoleAccessSettings',
            $argument,
            ['\App\Core\Grpc\Models\IndexRoleAccessSettingsResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param \App\Core\Grpc\Models\GetRoleAccessSettingRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\GetRoleAccessSettingResponse
     */
    public function GetRoleAccessSetting(\App\Core\Grpc\Models\GetRoleAccessSettingRequest $argument,
                                                                                           $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.RoleAccessSettingService/GetRoleAccessSetting',
            $argument,
            ['\App\Core\Grpc\Models\GetRoleAccessSettingResponse', 'decode'],
            $metadata, $options);
    }

}
