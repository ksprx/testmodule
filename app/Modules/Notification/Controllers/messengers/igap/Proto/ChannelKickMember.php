<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ChannelKickMember.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.ChannelKickMember</code>
 */
class ChannelKickMember extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>uint64 member_id = 3;</code>
     */
    protected $member_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Proto\Request $request
     *     @type int|string $room_id
     *     @type int|string $member_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\ChannelKickMember::initOnce();
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
     * Generated from protobuf field <code>uint64 member_id = 3;</code>
     * @return int|string
     */
    public function getMemberId()
    {
        return $this->member_id;
    }

    /**
     * Generated from protobuf field <code>uint64 member_id = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMemberId($var)
    {
        GPBUtil::checkUint64($var);
        $this->member_id = $var;

        return $this;
    }

}

