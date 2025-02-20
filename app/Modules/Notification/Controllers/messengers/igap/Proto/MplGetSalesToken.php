<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MplGetSalesToken.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.MplGetSalesToken</code>
 */
class MplGetSalesToken extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Request request = 1;</code>
     */
    protected $request = null;
    /**
     * Generated from protobuf field <code>uint64 amount = 2;</code>
     */
    protected $amount = 0;
    /**
     * Generated from protobuf field <code>uint64 to_user_id = 3;</code>
     */
    protected $to_user_id = 0;
    /**
     * Generated from protobuf field <code>uint64 invoice_number = 4;</code>
     */
    protected $invoice_number = 0;
    /**
     * Generated from protobuf field <code>bool inquiry = 5;</code>
     */
    protected $inquiry = false;
    /**
     * Generated from protobuf field <code>string description = 6;</code>
     */
    protected $description = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Proto\Request $request
     *     @type int|string $amount
     *     @type int|string $to_user_id
     *     @type int|string $invoice_number
     *     @type bool $inquiry
     *     @type string $description
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\MplGetSalesToken::initOnce();
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
     * Generated from protobuf field <code>uint64 amount = 2;</code>
     * @return int|string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Generated from protobuf field <code>uint64 amount = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkUint64($var);
        $this->amount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 to_user_id = 3;</code>
     * @return int|string
     */
    public function getToUserId()
    {
        return $this->to_user_id;
    }

    /**
     * Generated from protobuf field <code>uint64 to_user_id = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setToUserId($var)
    {
        GPBUtil::checkUint64($var);
        $this->to_user_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 invoice_number = 4;</code>
     * @return int|string
     */
    public function getInvoiceNumber()
    {
        return $this->invoice_number;
    }

    /**
     * Generated from protobuf field <code>uint64 invoice_number = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setInvoiceNumber($var)
    {
        GPBUtil::checkUint64($var);
        $this->invoice_number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool inquiry = 5;</code>
     * @return bool
     */
    public function getInquiry()
    {
        return $this->inquiry;
    }

    /**
     * Generated from protobuf field <code>bool inquiry = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setInquiry($var)
    {
        GPBUtil::checkBool($var);
        $this->inquiry = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string description = 6;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Generated from protobuf field <code>string description = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

}

