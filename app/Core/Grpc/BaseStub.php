<?php

namespace App\Core\Grpc;

use App\Core\Exceptions\GraphqlError;
use App\Core\Grpc\Models\GetUserByIdResponse;
use App\Core\Response\Response;
use Grpc\ChannelCredentials;

class BaseStub extends \Grpc\BaseStub
{
    protected $hostname;
    protected $credentials;

    protected $job = null;

    protected function __construct($hostname = null, $opts = null, $channel = null)
    {
        $this->hostname = $options['hostname'] ?? env('GRPC_HOST', 'localhost') . ':' . env('GRPC_PORT', '9000');
        $this->credentials = $options['credentials'] ?? ChannelCredentials::createInsecure();
        parent::__construct($this->hostname, ['credentials' => $this->credentials] + ($opts ?? []), $channel ?? []);
    }

    protected function _simpleRequest(
        $method,
        $argument,
        $deserialize,
        array $metadata = [],
        array $options = []
    )
    {
        $this->job = parent::_simpleRequest($method, $argument, $deserialize, $metadata, $options);
        $response = null;
        $status = null;
        try {
            list($response, $status) = $this->job->wait();
            if ($status->code === 0) {
                return $response;
            }

            throw new GraphqlError("Grpc Error", ["details" => $status->details, "code" => $status->code]);
        } catch (\Exception $e) {
            throw new GraphqlError($e->getMessage(), ["method" => $method]);
        }

    }

    public function cancel()
    {
        if ($this->job != null) {
            $this->job->cancel();
        }
        return $this;
    }

}