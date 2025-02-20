<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: auth.proto

namespace App\Core\Grpc\Models;

use Google\Protobuf\Internal\GPBUtil;

/**
 * model
 *
 * Generated from protobuf message <code>ir.kalabazzar.proto.User</code>
 */
class User extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 id = 1;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>optional string phone_number = 2;</code>
     */
    protected $phone_number = null;
    /**
     * Generated from protobuf field <code>optional string email = 3;</code>
     */
    protected $email = null;
    /**
     * Generated from protobuf field <code>optional string username = 4;</code>
     */
    protected $username = null;
    /**
     * Generated from protobuf field <code>repeated .ir.kalabazzar.proto.ModuleGroup module_groups = 5;</code>
     */
    private $module_groups;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type int|string $id
     * @type string $phone_number
     * @type string $email
     * @type string $username
     * @type array<\App\Core\Grpc\Models\ModuleGroup>|\Google\Protobuf\Internal\RepeatedField $module_groups
     * }
     */
    public function __construct($data = NULL)
    {
        \App\Core\Grpc\GPBMetadata\Auth::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 id = 1;</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>uint64 id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string phone_number = 2;</code>
     * @return string
     */
    public function getPhoneNumber()
    {
        return isset($this->phone_number) ? $this->phone_number : '';
    }

    /**
     * Generated from protobuf field <code>optional string phone_number = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPhoneNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->phone_number = $var;

        return $this;
    }

    public function hasPhoneNumber()
    {
        return isset($this->phone_number);
    }

    public function clearPhoneNumber()
    {
        unset($this->phone_number);
    }

    /**
     * Generated from protobuf field <code>optional string email = 3;</code>
     * @return string
     */
    public function getEmail()
    {
        return isset($this->email) ? $this->email : '';
    }

    /**
     * Generated from protobuf field <code>optional string email = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->email = $var;

        return $this;
    }

    public function hasEmail()
    {
        return isset($this->email);
    }

    public function clearEmail()
    {
        unset($this->email);
    }

    /**
     * Generated from protobuf field <code>optional string username = 4;</code>
     * @return string
     */
    public function getUsername()
    {
        return isset($this->username) ? $this->username : '';
    }

    /**
     * Generated from protobuf field <code>optional string username = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setUsername($var)
    {
        GPBUtil::checkString($var, True);
        $this->username = $var;

        return $this;
    }

    public function hasUsername()
    {
        return isset($this->username);
    }

    public function clearUsername()
    {
        unset($this->username);
    }

    /**
     * Generated from protobuf field <code>repeated .ir.kalabazzar.proto.ModuleGroup module_groups = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getModuleGroups()
    {
        return $this->module_groups;
    }

    /**
     * Generated from protobuf field <code>repeated .ir.kalabazzar.proto.ModuleGroup module_groups = 5;</code>
     * @param array<\App\Core\Grpc\Models\ModuleGroup>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setModuleGroups($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \App\Core\Grpc\Models\ModuleGroup::class);
        $this->module_groups = $arr;

        return $this;
    }

}

