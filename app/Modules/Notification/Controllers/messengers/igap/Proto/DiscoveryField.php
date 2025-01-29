<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Global.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.DiscoveryField</code>
 */
class DiscoveryField extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string imageurl = 1;</code>
     */
    protected $imageurl = '';
    /**
     * Generated from protobuf field <code>string value = 2;</code>
     */
    protected $value = '';
    /**
     * Generated from protobuf field <code>.proto.DiscoveryField.ButtonActionType actiontype = 3;</code>
     */
    protected $actiontype = 0;
    /**
     * Generated from protobuf field <code>uint32 orderid = 4;</code>
     */
    protected $orderid = 0;
    /**
     * Generated from protobuf field <code>uint32 id = 5;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>string param = 6;</code>
     */
    protected $param = '';
    /**
     * Generated from protobuf field <code>bool agreement = 7;</code>
     */
    protected $agreement = false;
    /**
     * Generated from protobuf field <code>bool refresh = 8;</code>
     */
    protected $refresh = false;
    /**
     * Generated from protobuf field <code>string agreementSlug = 9;</code>
     */
    protected $agreementSlug = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $imageurl
     *     @type string $value
     *     @type int $actiontype
     *     @type int $orderid
     *     @type int $id
     *     @type string $param
     *     @type bool $agreement
     *     @type bool $refresh
     *     @type string $agreementSlug
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBGlobal::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string imageurl = 1;</code>
     * @return string
     */
    public function getImageurl()
    {
        return $this->imageurl;
    }

    /**
     * Generated from protobuf field <code>string imageurl = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setImageurl($var)
    {
        GPBUtil::checkString($var, True);
        $this->imageurl = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string value = 2;</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>string value = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->value = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.proto.DiscoveryField.ButtonActionType actiontype = 3;</code>
     * @return int
     */
    public function getActiontype()
    {
        return $this->actiontype;
    }

    /**
     * Generated from protobuf field <code>.proto.DiscoveryField.ButtonActionType actiontype = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setActiontype($var)
    {
        GPBUtil::checkEnum($var, \Proto\DiscoveryField\ButtonActionType::class);
        $this->actiontype = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 orderid = 4;</code>
     * @return int
     */
    public function getOrderid()
    {
        return $this->orderid;
    }

    /**
     * Generated from protobuf field <code>uint32 orderid = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setOrderid($var)
    {
        GPBUtil::checkUint32($var);
        $this->orderid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 id = 5;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>uint32 id = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint32($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string param = 6;</code>
     * @return string
     */
    public function getParam()
    {
        return $this->param;
    }

    /**
     * Generated from protobuf field <code>string param = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setParam($var)
    {
        GPBUtil::checkString($var, True);
        $this->param = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool agreement = 7;</code>
     * @return bool
     */
    public function getAgreement()
    {
        return $this->agreement;
    }

    /**
     * Generated from protobuf field <code>bool agreement = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setAgreement($var)
    {
        GPBUtil::checkBool($var);
        $this->agreement = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool refresh = 8;</code>
     * @return bool
     */
    public function getRefresh()
    {
        return $this->refresh;
    }

    /**
     * Generated from protobuf field <code>bool refresh = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setRefresh($var)
    {
        GPBUtil::checkBool($var);
        $this->refresh = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string agreementSlug = 9;</code>
     * @return string
     */
    public function getAgreementSlug()
    {
        return $this->agreementSlug;
    }

    /**
     * Generated from protobuf field <code>string agreementSlug = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setAgreementSlug($var)
    {
        GPBUtil::checkString($var, True);
        $this->agreementSlug = $var;

        return $this;
    }

}

