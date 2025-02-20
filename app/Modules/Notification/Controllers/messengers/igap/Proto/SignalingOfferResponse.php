<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: SignalingOffer.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.SignalingOfferResponse</code>
 */
class SignalingOfferResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Response response = 1;</code>
     */
    protected $response = null;
    /**
     * Generated from protobuf field <code>uint64 caller_user_id = 2;</code>
     */
    protected $caller_user_id = 0;
    /**
     * Generated from protobuf field <code>.proto.SignalingOffer.Type type = 3;</code>
     */
    protected $type = 0;
    /**
     * Generated from protobuf field <code>string caller_sdp = 4;</code>
     */
    protected $caller_sdp = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Proto\Response $response
     *     @type int|string $caller_user_id
     *     @type int $type
     *     @type string $caller_sdp
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\SignalingOffer::initOnce();
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
     * Generated from protobuf field <code>uint64 caller_user_id = 2;</code>
     * @return int|string
     */
    public function getCallerUserId()
    {
        return $this->caller_user_id;
    }

    /**
     * Generated from protobuf field <code>uint64 caller_user_id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCallerUserId($var)
    {
        GPBUtil::checkUint64($var);
        $this->caller_user_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.proto.SignalingOffer.Type type = 3;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.proto.SignalingOffer.Type type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Proto\SignalingOffer\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string caller_sdp = 4;</code>
     * @return string
     */
    public function getCallerSdp()
    {
        return $this->caller_sdp;
    }

    /**
     * Generated from protobuf field <code>string caller_sdp = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCallerSdp($var)
    {
        GPBUtil::checkString($var, True);
        $this->caller_sdp = $var;

        return $this;
    }

}

