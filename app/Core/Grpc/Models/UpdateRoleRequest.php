<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: role.proto

namespace App\Core\Grpc\Models;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ir.kalabazzar.proto.UpdateRoleRequest</code>
 */
class UpdateRoleRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 id = 1;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>string fa_name = 2;</code>
     */
    protected $fa_name = '';
    /**
     * Generated from protobuf field <code>string en_name = 3;</code>
     */
    protected $en_name = '';
    /**
     * Generated from protobuf field <code>bool is_snap_shot = 4;</code>
     */
    protected $is_snap_shot = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type int|string $id
     * @type string $fa_name
     * @type string $en_name
     * @type bool $is_snap_shot
     * }
     */
    public function __construct($data = NULL)
    {
        \App\Core\Grpc\GPBMetadata\Role::initOnce();
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
     * Generated from protobuf field <code>string fa_name = 2;</code>
     * @return string
     */
    public function getFaName()
    {
        return $this->fa_name;
    }

    /**
     * Generated from protobuf field <code>string fa_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFaName($var)
    {
        GPBUtil::checkString($var, True);
        $this->fa_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string en_name = 3;</code>
     * @return string
     */
    public function getEnName()
    {
        return $this->en_name;
    }

    /**
     * Generated from protobuf field <code>string en_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setEnName($var)
    {
        GPBUtil::checkString($var, True);
        $this->en_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_snap_shot = 4;</code>
     * @return bool
     */
    public function getIsSnapShot()
    {
        return $this->is_snap_shot;
    }

    /**
     * Generated from protobuf field <code>bool is_snap_shot = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsSnapShot($var)
    {
        GPBUtil::checkBool($var);
        $this->is_snap_shot = $var;

        return $this;
    }

}

