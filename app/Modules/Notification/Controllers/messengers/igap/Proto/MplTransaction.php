<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Global.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.MplTransaction</code>
 */
class MplTransaction extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 order_id = 1 [jstype = JS_STRING];</code>
     */
    protected $order_id = 0;
    /**
     * Generated from protobuf field <code>string token = 2;</code>
     */
    protected $token = '';
    /**
     * Generated from protobuf field <code>uint32 pay_time = 3;</code>
     */
    protected $pay_time = 0;
    /**
     * Generated from protobuf field <code>.proto.MplTransaction.Type type = 4;</code>
     */
    protected $type = 0;
    /**
     * Generated from protobuf field <code>.proto.MplTransaction.Bill bill = 5;</code>
     */
    protected $bill = null;
    /**
     * Generated from protobuf field <code>.proto.MplTransaction.Topup topup = 6;</code>
     */
    protected $topup = null;
    /**
     * Generated from protobuf field <code>.proto.MplTransaction.Sales sales = 7;</code>
     */
    protected $sales = null;
    /**
     * Generated from protobuf field <code>.proto.MplTransaction.CardToCard cardtocard = 8;</code>
     */
    protected $cardtocard = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $order_id
     *     @type string $token
     *     @type int $pay_time
     *     @type int $type
     *     @type \Proto\MplTransaction\Bill $bill
     *     @type \Proto\MplTransaction\Topup $topup
     *     @type \Proto\MplTransaction\Sales $sales
     *     @type \Proto\MplTransaction\CardToCard $cardtocard
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBGlobal::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 order_id = 1 [jstype = JS_STRING];</code>
     * @return int|string
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * Generated from protobuf field <code>uint64 order_id = 1 [jstype = JS_STRING];</code>
     * @param int|string $var
     * @return $this
     */
    public function setOrderId($var)
    {
        GPBUtil::checkUint64($var);
        $this->order_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string token = 2;</code>
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Generated from protobuf field <code>string token = 2;</code>
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
     * Generated from protobuf field <code>uint32 pay_time = 3;</code>
     * @return int
     */
    public function getPayTime()
    {
        return $this->pay_time;
    }

    /**
     * Generated from protobuf field <code>uint32 pay_time = 3;</code>
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
     * Generated from protobuf field <code>.proto.MplTransaction.Type type = 4;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.proto.MplTransaction.Type type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Proto\MplTransaction\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.proto.MplTransaction.Bill bill = 5;</code>
     * @return \Proto\MplTransaction\Bill|null
     */
    public function getBill()
    {
        return $this->bill;
    }

    public function hasBill()
    {
        return isset($this->bill);
    }

    public function clearBill()
    {
        unset($this->bill);
    }

    /**
     * Generated from protobuf field <code>.proto.MplTransaction.Bill bill = 5;</code>
     * @param \Proto\MplTransaction\Bill $var
     * @return $this
     */
    public function setBill($var)
    {
        GPBUtil::checkMessage($var, \Proto\MplTransaction\Bill::class);
        $this->bill = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.proto.MplTransaction.Topup topup = 6;</code>
     * @return \Proto\MplTransaction\Topup|null
     */
    public function getTopup()
    {
        return $this->topup;
    }

    public function hasTopup()
    {
        return isset($this->topup);
    }

    public function clearTopup()
    {
        unset($this->topup);
    }

    /**
     * Generated from protobuf field <code>.proto.MplTransaction.Topup topup = 6;</code>
     * @param \Proto\MplTransaction\Topup $var
     * @return $this
     */
    public function setTopup($var)
    {
        GPBUtil::checkMessage($var, \Proto\MplTransaction\Topup::class);
        $this->topup = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.proto.MplTransaction.Sales sales = 7;</code>
     * @return \Proto\MplTransaction\Sales|null
     */
    public function getSales()
    {
        return $this->sales;
    }

    public function hasSales()
    {
        return isset($this->sales);
    }

    public function clearSales()
    {
        unset($this->sales);
    }

    /**
     * Generated from protobuf field <code>.proto.MplTransaction.Sales sales = 7;</code>
     * @param \Proto\MplTransaction\Sales $var
     * @return $this
     */
    public function setSales($var)
    {
        GPBUtil::checkMessage($var, \Proto\MplTransaction\Sales::class);
        $this->sales = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.proto.MplTransaction.CardToCard cardtocard = 8;</code>
     * @return \Proto\MplTransaction\CardToCard|null
     */
    public function getCardtocard()
    {
        return $this->cardtocard;
    }

    public function hasCardtocard()
    {
        return isset($this->cardtocard);
    }

    public function clearCardtocard()
    {
        unset($this->cardtocard);
    }

    /**
     * Generated from protobuf field <code>.proto.MplTransaction.CardToCard cardtocard = 8;</code>
     * @param \Proto\MplTransaction\CardToCard $var
     * @return $this
     */
    public function setCardtocard($var)
    {
        GPBUtil::checkMessage($var, \Proto\MplTransaction\CardToCard::class);
        $this->cardtocard = $var;

        return $this;
    }

}

