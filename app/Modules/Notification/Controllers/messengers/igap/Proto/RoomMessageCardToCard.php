<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Global.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.RoomMessageCardToCard</code>
 */
class RoomMessageCardToCard extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string message = 1;</code>
     */
    protected $message = '';
    /**
     * Generated from protobuf field <code>string label = 2;</code>
     */
    protected $label = '';
    /**
     * Generated from protobuf field <code>string image_url = 3;</code>
     */
    protected $image_url = '';
    /**
     * Generated from protobuf field <code>string action_type = 4;</code>
     */
    protected $action_type = '';
    /**
     * Generated from protobuf field <code>string card_number = 5;</code>
     */
    protected $card_number = '';
    /**
     * Generated from protobuf field <code>int64 amount = 6;</code>
     */
    protected $amount = 0;
    /**
     * Generated from protobuf field <code>int64 user_id = 7;</code>
     */
    protected $user_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $message
     *     @type string $label
     *     @type string $image_url
     *     @type string $action_type
     *     @type string $card_number
     *     @type int|string $amount
     *     @type int|string $user_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBGlobal::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string message = 1;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Generated from protobuf field <code>string message = 1;</code>
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
     * Generated from protobuf field <code>string label = 2;</code>
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Generated from protobuf field <code>string label = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->label = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string image_url = 3;</code>
     * @return string
     */
    public function getImageUrl()
    {
        return $this->image_url;
    }

    /**
     * Generated from protobuf field <code>string image_url = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setImageUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->image_url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string action_type = 4;</code>
     * @return string
     */
    public function getActionType()
    {
        return $this->action_type;
    }

    /**
     * Generated from protobuf field <code>string action_type = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setActionType($var)
    {
        GPBUtil::checkString($var, True);
        $this->action_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string card_number = 5;</code>
     * @return string
     */
    public function getCardNumber()
    {
        return $this->card_number;
    }

    /**
     * Generated from protobuf field <code>string card_number = 5;</code>
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
     * Generated from protobuf field <code>int64 amount = 6;</code>
     * @return int|string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Generated from protobuf field <code>int64 amount = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkInt64($var);
        $this->amount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 user_id = 7;</code>
     * @return int|string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Generated from protobuf field <code>int64 user_id = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkInt64($var);
        $this->user_id = $var;

        return $this;
    }

}

