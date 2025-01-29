<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ChannelGetMessagesStats.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.ChannelGetMessagesStats</code>
 */
class ChannelGetMessagesStats extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Request request = 1;</code>
     */
    protected $request = null;
    /**
     * Generated from protobuf field <code>uint64 room_id = 2;</code>
     */
    protected $room_id = 0;
    /**
     * Generated from protobuf field <code>repeated uint64 message_id = 3 [deprecated = true];</code>
     * @deprecated
     */
    private $message_id;
    /**
     * Generated from protobuf field <code>repeated .proto.ChannelGetMessagesStats.messageIdInfo message_id_info = 4;</code>
     */
    private $message_id_info;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Proto\Request $request
     *     @type int|string $room_id
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $message_id
     *     @type array<\Proto\ChannelGetMessagesStats\messageIdInfo>|\Google\Protobuf\Internal\RepeatedField $message_id_info
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\ChannelGetMessagesStats::initOnce();
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
     * Generated from protobuf field <code>uint64 room_id = 2;</code>
     * @return int|string
     */
    public function getRoomId()
    {
        return $this->room_id;
    }

    /**
     * Generated from protobuf field <code>uint64 room_id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRoomId($var)
    {
        GPBUtil::checkUint64($var);
        $this->room_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint64 message_id = 3 [deprecated = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     * @deprecated
     */
    public function getMessageId()
    {
        @trigger_error('message_id is deprecated.', E_USER_DEPRECATED);
        return $this->message_id;
    }

    /**
     * Generated from protobuf field <code>repeated uint64 message_id = 3 [deprecated = true];</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     * @deprecated
     */
    public function setMessageId($var)
    {
        @trigger_error('message_id is deprecated.', E_USER_DEPRECATED);
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT64);
        $this->message_id = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .proto.ChannelGetMessagesStats.messageIdInfo message_id_info = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMessageIdInfo()
    {
        return $this->message_id_info;
    }

    /**
     * Generated from protobuf field <code>repeated .proto.ChannelGetMessagesStats.messageIdInfo message_id_info = 4;</code>
     * @param array<\Proto\ChannelGetMessagesStats\messageIdInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMessageIdInfo($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Proto\ChannelGetMessagesStats\messageIdInfo::class);
        $this->message_id_info = $arr;

        return $this;
    }

}

