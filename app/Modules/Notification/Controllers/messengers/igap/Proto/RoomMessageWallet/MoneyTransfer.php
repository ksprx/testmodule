<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Global.proto

namespace Proto\RoomMessageWallet;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.RoomMessageWallet.MoneyTransfer</code>
 */
class MoneyTransfer extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 from_user_id = 1 [jstype = JS_STRING];</code>
     */
    protected $from_user_id = 0;
    /**
     * Generated from protobuf field <code>uint64 to_user_id = 2 [jstype = JS_STRING];</code>
     */
    protected $to_user_id = 0;
    /**
     * Generated from protobuf field <code>uint64 amount = 3 [jstype = JS_STRING];</code>
     */
    protected $amount = 0;
    /**
     * Generated from protobuf field <code>int64 trace_number = 4;</code>
     */
    protected $trace_number = 0;
    /**
     * Generated from protobuf field <code>int64 invoice_number = 5;</code>
     */
    protected $invoice_number = 0;
    /**
     * Generated from protobuf field <code>uint32 pay_time = 6;</code>
     */
    protected $pay_time = 0;
    /**
     * Generated from protobuf field <code>string description = 7;</code>
     */
    protected $description = '';
    /**
     * Generated from protobuf field <code>string card_number = 8;</code>
     */
    protected $card_number = '';
    /**
     * Generated from protobuf field <code>int64 rrn = 9;</code>
     */
    protected $rrn = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $from_user_id
     *     @type int|string $to_user_id
     *     @type int|string $amount
     *     @type int|string $trace_number
     *     @type int|string $invoice_number
     *     @type int $pay_time
     *     @type string $description
     *     @type string $card_number
     *     @type int|string $rrn
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBGlobal::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 from_user_id = 1 [jstype = JS_STRING];</code>
     * @return int|string
     */
    public function getFromUserId()
    {
        return $this->from_user_id;
    }

    /**
     * Generated from protobuf field <code>uint64 from_user_id = 1 [jstype = JS_STRING];</code>
     * @param int|string $var
     * @return $this
     */
    public function setFromUserId($var)
    {
        GPBUtil::checkUint64($var);
        $this->from_user_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 to_user_id = 2 [jstype = JS_STRING];</code>
     * @return int|string
     */
    public function getToUserId()
    {
        return $this->to_user_id;
    }

    /**
     * Generated from protobuf field <code>uint64 to_user_id = 2 [jstype = JS_STRING];</code>
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
     * Generated from protobuf field <code>uint64 amount = 3 [jstype = JS_STRING];</code>
     * @return int|string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Generated from protobuf field <code>uint64 amount = 3 [jstype = JS_STRING];</code>
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
     * Generated from protobuf field <code>int64 trace_number = 4;</code>
     * @return int|string
     */
    public function getTraceNumber()
    {
        return $this->trace_number;
    }

    /**
     * Generated from protobuf field <code>int64 trace_number = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTraceNumber($var)
    {
        GPBUtil::checkInt64($var);
        $this->trace_number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 invoice_number = 5;</code>
     * @return int|string
     */
    public function getInvoiceNumber()
    {
        return $this->invoice_number;
    }

    /**
     * Generated from protobuf field <code>int64 invoice_number = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setInvoiceNumber($var)
    {
        GPBUtil::checkInt64($var);
        $this->invoice_number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 pay_time = 6;</code>
     * @return int
     */
    public function getPayTime()
    {
        return $this->pay_time;
    }

    /**
     * Generated from protobuf field <code>uint32 pay_time = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setPayTime($var)
    {
        GPBUtil::checkUint32($var);
        $this->pay_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string description = 7;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Generated from protobuf field <code>string description = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string card_number = 8;</code>
     * @return string
     */
    public function getCardNumber()
    {
        return $this->card_number;
    }

    /**
     * Generated from protobuf field <code>string card_number = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setCardNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->card_number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 rrn = 9;</code>
     * @return int|string
     */
    public function getRrn()
    {
        return $this->rrn;
    }

    /**
     * Generated from protobuf field <code>int64 rrn = 9;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRrn($var)
    {
        GPBUtil::checkInt64($var);
        $this->rrn = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MoneyTransfer::class, \Proto\RoomMessageWallet_MoneyTransfer::class);

