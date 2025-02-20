<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: InfoUpdate.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.InfoUpdateResponse</code>
 */
class InfoUpdateResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Response response = 1;</code>
     */
    protected $response = null;
    /**
     * Generated from protobuf field <code>string body = 2;</code>
     */
    protected $body = '';
    /**
     * Generated from protobuf field <code>uint32 last_version = 3;</code>
     */
    protected $last_version = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Proto\Response $response
     *     @type string $body
     *     @type int $last_version
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\InfoUpdate::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.proto.Response response = 1;</code>
     * @return \Proto\Response|null
     */
    public function getResponse()
    {
        return $this->response;
    }

    public function hasResponse()
    {
        return isset($this->response);
    }

    public function clearResponse()
    {
        unset($this->response);
    }

    /**
     * Generated from protobuf field <code>.proto.Response response = 1;</code>
     * @param \Proto\Response $var
     * @return $this
     */
    public function setResponse($var)
    {
        GPBUtil::checkMessage($var, \Proto\Response::class);
        $this->response = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string body = 2;</code>
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Generated from protobuf field <code>string body = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setBody($var)
    {
        GPBUtil::checkString($var, True);
        $this->body = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 last_version = 3;</code>
     * @return int
     */
    public function getLastVersion()
    {
        return $this->last_version;
    }

    /**
     * Generated from protobuf field <code>uint32 last_version = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setLastVersion($var)
    {
        GPBUtil::checkUint32($var);
        $this->last_version = $var;

        return $this;
    }

}

