<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: SignalingSessionHold.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.SignalingSessionHoldResponse</code>
 */
class SignalingSessionHoldResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Response response = 1;</code>
     */
    protected $response = null;
    /**
     * Generated from protobuf field <code>bool hold = 2;</code>
     */
    protected $hold = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Proto\Response $response
     *     @type bool $hold
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\SignalingSessionHold::initOnce();
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
     * Generated from protobuf field <code>bool hold = 2;</code>
     * @return bool
     */
    public function getHold()
    {
        return $this->hold;
    }

    /**
     * Generated from protobuf field <code>bool hold = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setHold($var)
    {
        GPBUtil::checkBool($var);
        $this->hold = $var;

        return $this;
    }

}

