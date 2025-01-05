<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: role.proto

namespace App\Core\Grpc\Models;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ir.kalabazzar.proto.IndexRoleSubModulesResponse</code>
 */
class IndexRoleSubModulesResponse extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>repeated .ir.kalabazzar.proto.IndexSubModuleData data = 3;</code>
     */
    private $data;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type int $status_code
     * @type string $message
     * @type array<\App\Core\Grpc\Models\IndexSubModuleData>|\Google\Protobuf\Internal\RepeatedField $data
     * }
     */
    public function __construct($data = NULL)
    {
        \App\Core\Grpc\GPBMetadata\Role::initOnce();
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
     * Generated from protobuf field <code>repeated .ir.kalabazzar.proto.IndexSubModuleData data = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Generated from protobuf field <code>repeated .ir.kalabazzar.proto.IndexSubModuleData data = 3;</code>
     * @param array<\App\Core\Grpc\Models\IndexSubModuleData>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setData($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \App\Core\Grpc\Models\IndexSubModuleData::class);
        $this->data = $arr;

        return $this;
    }

}

