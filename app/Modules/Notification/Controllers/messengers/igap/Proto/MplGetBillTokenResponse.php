<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MplGetBillToken.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.MplGetBillTokenResponse</code>
 */
class MplGetBillTokenResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Response response = 1;</code>
     */
    protected $response = null;
    /**
     * Generated from protobuf field <code>uint32 status = 2;</code>
     */
    protected $status = 0;
    /**
     * Generated from protobuf field <code>string token = 3;</code>
     */
    protected $token = '';
    /**
     * Generated from protobuf field <code>uint32 expire_time = 4;</code>
     */
    protected $expire_time = 0;
    /**
     * Generated from protobuf field <code>string message = 5;</code>
     */
    protected $message = '';
    /**
     * Generated from protobuf field <code>uint32 discount_amount = 6;</code>
     */
    protected $discount_amount = 0;
    /**
     * Generated from protobuf field <code>uint32 original_amount = 7;</code>
     */
    protected $original_amount = 0;
    /**
     * Generated from protobuf field <code>uint32 new_pay_id = 8;</code>
     */
    protected $new_pay_id = 0;
    /**
     * Generated from protobuf field <code>string organization_name = 9;</code>
     */
    protected $organization_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Proto\Response $response
     *     @type int $status
     *     @type string $token
     *     @type int $expire_time
     *     @type string $message
     *     @type int $discount_amount
     *     @type int $original_amount
     *     @type int $new_pay_id
     *     @type string $organization_name
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\MplGetBillToken::initOnce();
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
     * Generated from protobuf field <code>uint32 status = 2;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>uint32 status = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkUint32($var);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string token = 3;</code>
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Generated from protobuf field <code>string token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->token = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 expire_time = 4;</code>
     * @return int
     */
    public function getExpireTime()
    {
        return $this->expire_time;
    }

    /**
     * Generated from protobuf field <code>uint32 expire_time = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setExpireTime($var)
    {
        GPBUtil::checkUint32($var);
        $this->expire_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string message = 5;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Generated from protobuf field <code>string message = 5;</code>
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
     * Generated from protobuf field <code>uint32 discount_amount = 6;</code>
     * @return int
     */
    public function getDiscountAmount()
    {
        return $this->discount_amount;
    }

    /**
     * Generated from protobuf field <code>uint32 discount_amount = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setDiscountAmount($var)
    {
        GPBUtil::checkUint32($var);
        $this->discount_amount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 original_amount = 7;</code>
     * @return int
     */
    public function getOriginalAmount()
    {
        return $this->original_amount;
    }

    /**
     * Generated from protobuf field <code>uint32 original_amount = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setOriginalAmount($var)
    {
        GPBUtil::checkUint32($var);
        $this->original_amount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 new_pay_id = 8;</code>
     * @return int
     */
    public function getNewPayId()
    {
        return $this->new_pay_id;
    }

    /**
     * Generated from protobuf field <code>uint32 new_pay_id = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setNewPayId($var)
    {
        GPBUtil::checkUint32($var);
        $this->new_pay_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string organization_name = 9;</code>
     * @return string
     */
    public function getOrganizationName()
    {
        return $this->organization_name;
    }

    /**
     * Generated from protobuf field <code>string organization_name = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setOrganizationName($var)
    {
        GPBUtil::checkString($var, True);
        $this->organization_name = $var;

        return $this;
    }

}

