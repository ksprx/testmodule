<?php
// GENERATED CODE -- DO NOT EDIT!

namespace App\Core\Grpc\Clients;

/**
 * service
 */
class SduiServiceClient extends \App\Core\Grpc\BaseStub
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
     * @param \App\Core\Grpc\Models\GetSduiRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \App\Core\Grpc\Models\GetSduiResponse
     */
    public function GetSdui(\App\Core\Grpc\Models\GetSduiRequest $argument,
                                                                 $metadata = [], $options = [])
    {
        return $this->_simpleRequest('/ir.kalabazzar.proto.SduiService/GetSdui',
            $argument,
            ['\App\Core\Grpc\Models\GetSduiResponse', 'decode'],
            $metadata, $options);
    }

}
