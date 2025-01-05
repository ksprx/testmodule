<?php
// GENERATED CODE -- DO NOT EDIT!

namespace App\Core\Grpc\Clients;

/**
 * service
 */
class ApiKeyServiceClient extends \App\Core\Grpc\BaseStub
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
     * @param \App\Core\Grpc\Models\CreateApiKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\CreateApiKeyResponse
     */
    public function CreateApiKey(\App\Core\Grpc\Models\CreateApiKeyRequest $argument,
                                                                           $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.ApiKeyService/CreateApiKey',
            $argument,
            ['\App\Core\Grpc\Models\CreateApiKeyResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param \App\Core\Grpc\Models\UpdateApiKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\UpdateApiKeyResponse
     */
    public function UpdateApiKey(\App\Core\Grpc\Models\UpdateApiKeyRequest $argument,
                                                                           $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.ApiKeyService/UpdateApiKey',
            $argument,
            ['\App\Core\Grpc\Models\UpdateApiKeyResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param \App\Core\Grpc\Models\DeleteApiKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\DeleteApiKeyResponse
     */
    public function DeleteApiKey(\App\Core\Grpc\Models\DeleteApiKeyRequest $argument,
                                                                           $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.ApiKeyService/DeleteApiKey',
            $argument,
            ['\App\Core\Grpc\Models\DeleteApiKeyResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param \App\Core\Grpc\Models\IndexApiKeysRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\IndexApiKeysResponse
     */
    public function IndexApiKeys(\App\Core\Grpc\Models\IndexApiKeysRequest $argument,
                                                                           $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.ApiKeyService/IndexApiKeys',
            $argument,
            ['\App\Core\Grpc\Models\IndexApiKeysResponse', 'decode'],
            $metadata, $options);
    }

    /**
     * @param \App\Core\Grpc\Models\GetApiKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\GetApiKeyResponse
     */
    public function GetApiKey(\App\Core\Grpc\Models\GetApiKeyRequest $argument,
                                                                     $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.ApiKeyService/GetApiKey',
            $argument,
            ['\App\Core\Grpc\Models\GetApiKeyResponse', 'decode'],
            $metadata, $options);
    }

}
