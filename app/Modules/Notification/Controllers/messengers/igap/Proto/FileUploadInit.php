<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: FileUploadInit.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.FileUploadInit</code>
 */
class FileUploadInit extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Request request = 1;</code>
     */
    protected $request = null;
    /**
     * Generated from protobuf field <code>bytes first_bytes = 2;</code>
     */
    protected $first_bytes = '';
    /**
     * Generated from protobuf field <code>bytes last_bytes = 3;</code>
     */
    protected $last_bytes = '';
    /**
     * Generated from protobuf field <code>int64 size = 4;</code>
     */
    protected $size = 0;
    /**
     * Generated from protobuf field <code>bytes file_hash = 5;</code>
     */
    protected $file_hash = '';
    /**
     * Generated from protobuf field <code>string file_name = 6;</code>
     */
    protected $file_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Proto\Request $request
     *     @type string $first_bytes
     *     @type string $last_bytes
     *     @type int|string $size
     *     @type string $file_hash
     *     @type string $file_name
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\FileUploadInit::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.proto.Request request = 1;</code>
     * @return \Proto\Request|null
     */
    public function getRequest()
    {
        return $this->request;
    }

    public function hasRequest()
    {
        return isset($this->request);
    }

    public function clearRequest()
    {
        unset($this->request);
    }

    /**
     * Generated from protobuf field <code>.proto.Request request = 1;</code>
     * @param \Proto\Request $var
     * @return $this
     */
    public function setRequest($var)
    {
        GPBUtil::checkMessage($var, \Proto\Request::class);
        $this->request = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes first_bytes = 2;</code>
     * @return string
     */
    public function getFirstBytes()
    {
        return $this->first_bytes;
    }

    /**
     * Generated from protobuf field <code>bytes first_bytes = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFirstBytes($var)
    {
        GPBUtil::checkString($var, False);
        $this->first_bytes = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes last_bytes = 3;</code>
     * @return string
     */
    public function getLastBytes()
    {
        return $this->last_bytes;
    }

    /**
     * Generated from protobuf field <code>bytes last_bytes = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setLastBytes($var)
    {
        GPBUtil::checkString($var, False);
        $this->last_bytes = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 size = 4;</code>
     * @return int|string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Generated from protobuf field <code>int64 size = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->size = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes file_hash = 5;</code>
     * @return string
     */
    public function getFileHash()
    {
        return $this->file_hash;
    }

    /**
     * Generated from protobuf field <code>bytes file_hash = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setFileHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->file_hash = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string file_name = 6;</code>
     * @return string
     */
    public function getFileName()
    {
        return $this->file_name;
    }

    /**
     * Generated from protobuf field <code>string file_name = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setFileName($var)
    {
        GPBUtil::checkString($var, True);
        $this->file_name = $var;

        return $this;
    }

}

