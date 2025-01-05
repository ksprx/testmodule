<?php
// GENERATED CODE -- DO NOT EDIT!

namespace App\Core\Grpc\Clients;

/**
 * service
 */
class UserAccessSettingServiceClient extends \App\Core\Grpc\BaseStub
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
     * @param \App\Core\Grpc\Models\CreateUserAccessSettingRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\CreateUserAccessSettingResponse
     */
    public function CreateUserAccessSetting(\App\Core\Grpc\Models\CreateUserAccessSettingRequest $argument,
                                                                                                 $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.UserAccessSettingService/CreateUserAccessSetting',
            $argument,
            ['\App\Core\Grpc\Models\CreateUserAccessSettingResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param \App\Core\Grpc\Models\UpdateUserAccessSettingRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\UpdateUserAccessSettingResponse
     */
    public function UpdateUserAccessSetting(\App\Core\Grpc\Models\UpdateUserAccessSettingRequest $argument,
                                                                                                 $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.UserAccessSettingService/UpdateUserAccessSetting',
            $argument,
            ['\App\Core\Grpc\Models\UpdateUserAccessSettingResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param \App\Core\Grpc\Models\DeleteUserAccessSettingRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\DeleteUserAccessSettingResponse
     */
    public function DeleteUserAccessSetting(\App\Core\Grpc\Models\DeleteUserAccessSettingRequest $argument,
                                                                                                 $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.UserAccessSettingService/DeleteUserAccessSetting',
            $argument,
            ['\App\Core\Grpc\Models\DeleteUserAccessSettingResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param \App\Core\Grpc\Models\IndexUserAccessSettingRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\IndexUserAccessSettingsResponse
     */
    public function IndexUserAccessSettings(\App\Core\Grpc\Models\IndexUserAccessSettingRequest $argument,
                                                                                                $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.UserAccessSettingService/IndexUserAccessSettings',
            $argument,
            ['\App\Core\Grpc\Models\IndexUserAccessSettingsResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param \App\Core\Grpc\Models\GetUserAccessSettingRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\GetUserAccessSettingResponse
     */
    public function GetUserAccessSetting(\App\Core\Grpc\Models\GetUserAccessSettingRequest $argument,
                                                                                           $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.UserAccessSettingService/GetUserAccessSetting',
            $argument,
            ['\App\Core\Grpc\Models\GetUserAccessSettingResponse', 'decode'],
            $metadata, $options);
    }

}
