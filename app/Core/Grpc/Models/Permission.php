<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: permission.proto

namespace App\Core\Grpc\Models;

use Google\Protobuf\Internal\GPBUtil;

/**
 * model
 *
 * Generated from protobuf message <code>ir.kalabazzar.proto.Permission</code>
 */
class Permission extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>uint64 module_id = 4;</code>
     */
    protected $module_id = 0;
    /**
     * Generated from protobuf field <code>.ir.kalabazzar.proto.SensitivityLevel sensitivity = 5;</code>
     */
    protected $sensitivity = 0;
    /**
     * Generated from protobuf field <code>string created_at = 7;</code>
     */
    protected $created_at = '';
    /**
     * Generated from protobuf field <code>string updated_at = 8;</code>
     */
    protected $updated_at = '';
    /**
     * Generated from protobuf field <code>optional string deleted_at = 9;</code>
     */
    protected $deleted_at = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type int|string $id
     * @type string $fa_name
     * @type string $en_name
     * @type int|string $module_id
     * @type int $sensitivity
     * @type string $created_at
     * @type string $updated_at
     * @type string $deleted_at
     * }
     */
    public function __construct($data = NULL)
    {
        \App\Core\Grpc\GPBMetadata\Permission::initOnce();
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
     * Generated from protobuf field <code>uint64 module_id = 4;</code>
     * @return int|string
     */
    public function getModuleId()
    {
        return $this->module_id;
    }

    /**
     * Generated from protobuf field <code>uint64 module_id = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setModuleId($var)
    {
        GPBUtil::checkUint64($var);
        $this->module_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ir.kalabazzar.proto.SensitivityLevel sensitivity = 5;</code>
     * @return int
     */
    public function getSensitivity()
    {
        return $this->sensitivity;
    }

    /**
     * Generated from protobuf field <code>.ir.kalabazzar.proto.SensitivityLevel sensitivity = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setSensitivity($var)
    {
        GPBUtil::checkEnum($var, \App\Core\Grpc\Models\SensitivityLevel::class);
        $this->sensitivity = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string created_at = 7;</code>
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Generated from protobuf field <code>string created_at = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkString($var, True);
        $this->created_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string updated_at = 8;</code>
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Generated from protobuf field <code>string updated_at = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setUpdatedAt($var)
    {
        GPBUtil::checkString($var, True);
        $this->updated_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string deleted_at = 9;</code>
     * @return string
     */
    public function getDeletedAt()
    {
        return isset($this->deleted_at) ? $this->deleted_at : '';
    }

    /**
     * Generated from protobuf field <code>optional string deleted_at = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setDeletedAt($var)
    {
        GPBUtil::checkString($var, True);
        $this->deleted_at = $var;

        return $this;
    }

    public function hasDeletedAt()
    {
        return isset($this->deleted_at);
    }

    public function clearDeletedAt()
    {
        unset($this->deleted_at);
    }

}

