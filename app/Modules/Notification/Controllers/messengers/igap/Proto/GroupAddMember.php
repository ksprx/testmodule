<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: GroupAddMember.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.GroupAddMember</code>
 */
class GroupAddMember extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>.proto.GroupAddMember.Member member = 3;</code>
     */
    protected $member = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Proto\Request $request
     *     @type int|string $room_id
     *     @type \Proto\GroupAddMember\Member $member
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\GroupAddMember::initOnce();
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
     * Generated from protobuf field <code>.proto.GroupAddMember.Member member = 3;</code>
     * @return \Proto\GroupAddMember\Member|null
     */
    public function getMember()
    {
        return $this->member;
    }

    public function hasMember()
    {
        return isset($this->member);
    }

    public function clearMember()
    {
        unset($this->member);
    }

    /**
     * Generated from protobuf field <code>.proto.GroupAddMember.Member member = 3;</code>
     * @param \Proto\GroupAddMember\Member $var
     * @return $this
     */
    public function setMember($var)
    {
        GPBUtil::checkMessage($var, \Proto\GroupAddMember\Member::class);
        $this->member = $var;

        return $this;
    }

}

