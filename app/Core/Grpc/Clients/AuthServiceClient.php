<?php
// GENERATED CODE -- DO NOT EDIT!

namespace App\Core\Grpc\Clients;

/**
 * service
 */
class AuthServiceClient extends \App\Core\Grpc\BaseStub
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
     * @param \App\Core\Grpc\Models\UserRegisterRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\UserRegisterResponse
     */
    public function RegisterUser(\App\Core\Grpc\Models\UserRegisterRequest $argument,
                                                                           $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.AuthService/RegisterUser',
            $argument,
            ['\App\Core\Grpc\Models\UserRegisterResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param \App\Core\Grpc\Models\UserLoginRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\UserLoginResponse
     */
    public function LoginUser(\App\Core\Grpc\Models\UserLoginRequest $argument,
                                                                     $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.AuthService/LoginUser',
            $argument,
            ['\App\Core\Grpc\Models\UserLoginResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param \App\Core\Grpc\Models\ValidateOtpRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\ValidateOtpResponse
     */
    public function ValidateOtp(\App\Core\Grpc\Models\ValidateOtpRequest $argument,
                                                                         $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.AuthService/ValidateOtp',
            $argument,
            ['\App\Core\Grpc\Models\ValidateOtpResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param \App\Core\Grpc\Models\Get2FaMethodRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\SecurePhoneNumberOrEmailResponse
     */
    public function Get2FaMethod(\App\Core\Grpc\Models\Get2FaMethodRequest $argument,
                                                                           $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.AuthService/Get2FaMethod',
            $argument,
            ['\App\Core\Grpc\Models\SecurePhoneNumberOrEmailResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param \App\Core\Grpc\Models\GetUserByIdRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\GetUserByIdResponse
     */
    public function GetUserByID(\App\Core\Grpc\Models\GetUserByIdRequest $argument,
                                                                         $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.AuthService/GetUserByID',
            $argument,
            ['\App\Core\Grpc\Models\GetUserByIdResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param \App\Core\Grpc\Models\GetUserByTokenRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\GetUserByTokenResponse
     */
    public function GetUserByToken(\App\Core\Grpc\Models\GetUserByTokenRequest $argument,
                                                                               $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.AuthService/GetUserByToken',
            $argument,
            ['\App\Core\Grpc\Models\GetUserByTokenResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param \App\Core\Grpc\Models\ResendOtpRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\ResentOtpResponse
     */
    public function ResendOtp(\App\Core\Grpc\Models\ResendOtpRequest $argument,
                                                                     $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.AuthService/ResendOtp',
            $argument,
            ['\App\Core\Grpc\Models\ResentOtpResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param \App\Core\Grpc\Models\GetSendOtpAcknowledgeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\GetSendOtpAcknowledgeResponse
     */
    public function SendOtpAcknowledge(\App\Core\Grpc\Models\GetSendOtpAcknowledgeRequest $argument,
                                                                                          $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.AuthService/SendOtpAcknowledge',
            $argument,
            ['\App\Core\Grpc\Models\GetSendOtpAcknowledgeResponse', 'decode'],
            $metadata, $options);
    }

}
