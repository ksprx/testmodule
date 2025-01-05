<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: auth.proto

namespace App\Core\Grpc\Models;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ir.kalabazzar.proto.GetUserByTokenResponse</code>
 */
class GetUserByTokenResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 status_code = 1;</code>
     */
    protected $status_code = 0;
    /**
     * Generated from protobuf field <code>string message = 2;</code>
     */
    protected $message = '';
    /**
     * Generated from protobuf field <code>optional .ir.kalabazzar.proto.User data = 3;</code>
     */
    protected $data = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type int $status_code
     * @type string $message
     * @type \App\Core\Grpc\Models\User $data
     * }
     */
    public function __construct($data = NULL)
    {
        \App\Core\Grpc\GPBMetadata\Auth::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 status_code = 1;</code>
     * @return int
     */
    public function getStatusCode()
    {
        return $this->status_code;
    }

    /**
     * Generated from protobuf field <code>int32 status_code = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setStatusCode($var)
    {
        GPBUtil::checkInt32($var);
        $this->status_code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string message = 2;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Generated from protobuf field <code>string message = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .ir.kalabazzar.proto.User data = 3;</code>
     * @return \App\Core\Grpc\Models\User|null
     */
    public function getData()
    {
        return $this->data;
    }

    public function hasData()
    {
        return isset($this->data);
    }

    public function clearData()
    {
        unset($this->data);
    }

    /**
     * Generated from protobuf field <code>optional .ir.kalabazzar.proto.User data = 3;</code>
     * @param \App\Core\Grpc\Models\User $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkMessage($var, \App\Core\Grpc\Models\User::class);
        $this->data = $var;

        return $this;
    }

}

