<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: category.proto

namespace App\Core\Grpc\Models;

use Google\Protobuf\Internal\GPBUtil;

/**
 * request
 *
 * Generated from protobuf message <code>ir.kalabazzar.proto.CreateCategoryRequest</code>
 */
class CreateCategoryRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string fa_name = 1;</code>
     */
    protected $fa_name = '';
    /**
     * Generated from protobuf field <code>string en_name = 2;</code>
     */
    protected $en_name = '';
    /**
     * Generated from protobuf field <code>uint64 parent_id = 3;</code>
     */
    protected $parent_id = 0;
    /**
     * Generated from protobuf field <code>uint32 priority = 4;</code>
     */
    protected $priority = 0;
    /**
     * Generated from protobuf field <code>optional .google.protobuf.Struct metadata = 5;</code>
     */
    protected $metadata = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type string $fa_name
     * @type string $en_name
     * @type int|string $parent_id
     * @type int $priority
     * @type \Google\Protobuf\Struct $metadata
     * }
     */
    public function __construct($data = NULL)
    {
        \App\Core\Grpc\GPBMetadata\Category::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string fa_name = 1;</code>
     * @return string
     */
    public function getFaName()
    {
        return $this->fa_name;
    }

    /**
     * Generated from protobuf field <code>string fa_name = 1;</code>
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
     * Generated from protobuf field <code>string en_name = 2;</code>
     * @return string
     */
    public function getEnName()
    {
        return $this->en_name;
    }

    /**
     * Generated from protobuf field <code>string en_name = 2;</code>
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
     * Generated from protobuf field <code>uint64 parent_id = 3;</code>
     * @return int|string
     */
    public function getParentId()
    {
        return $this->parent_id;
    }

    /**
     * Generated from protobuf field <code>uint64 parent_id = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setParentId($var)
    {
        GPBUtil::checkUint64($var);
        $this->parent_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 priority = 4;</code>
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Generated from protobuf field <code>uint32 priority = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPriority($var)
    {
        GPBUtil::checkUint32($var);
        $this->priority = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .google.protobuf.Struct metadata = 5;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    public function hasMetadata()
    {
        return isset($this->metadata);
    }

    public function clearMetadata()
    {
        unset($this->metadata);
    }

    /**
     * Generated from protobuf field <code>optional .google.protobuf.Struct metadata = 5;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->metadata = $var;

        return $this;
    }

}

