<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ChannelGetMemberList.proto

namespace Proto\ChannelGetMemberListResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.ChannelGetMemberListResponse.Member</code>
 */
class Member extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 userId = 1;</code>
     */
    protected $userId = 0;
    /**
     * Generated from protobuf field <code>.proto.ChannelRoom.Role role = 2;</code>
     */
    protected $role = 0;
    /**
     * Generated from protobuf field <code>.proto.ChannelAddAdmin.AdminRights adminRights = 3;</code>
     */
    protected $adminRights = null;
    /**
     * Generated from protobuf field <code>.proto.RegisteredUser userInfo = 4;</code>
     */
    protected $userInfo = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $userId
     *     @type int $role
     *     @type \Proto\ChannelAddAdmin\AdminRights $adminRights
     *     @type \Proto\RegisteredUser $userInfo
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\ChannelGetMemberList::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 userId = 1;</code>
     * @return int|string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Generated from protobuf field <code>uint64 userId = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkUint64($var);
        $this->userId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.proto.ChannelRoom.Role role = 2;</code>
     * @return int
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Generated from protobuf field <code>.proto.ChannelRoom.Role role = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setRole($var)
    {
        GPBUtil::checkEnum($var, \Proto\ChannelRoom\Role::class);
        $this->role = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.proto.ChannelAddAdmin.AdminRights adminRights = 3;</code>
     * @return \Proto\ChannelAddAdmin\AdminRights|null
     */
    public function getAdminRights()
    {
        return $this->adminRights;
    }

    public function hasAdminRights()
    {
        return isset($this->adminRights);
    }

    public function clearAdminRights()
    {
        unset($this->adminRights);
    }

    /**
     * Generated from protobuf field <code>.proto.ChannelAddAdmin.AdminRights adminRights = 3;</code>
     * @param \Proto\ChannelAddAdmin\AdminRights $var
     * @return $this
     */
    public function setAdminRights($var)
    {
        GPBUtil::checkMessage($var, \Proto\ChannelAddAdmin\AdminRights::class);
        $this->adminRights = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.proto.RegisteredUser userInfo = 4;</code>
     * @return \Proto\RegisteredUser|null
     */
    public function getUserInfo()
    {
        return $this->userInfo;
    }

    public function hasUserInfo()
    {
        return isset($this->userInfo);
    }

    public function clearUserInfo()
    {
        unset($this->userInfo);
    }

    /**
     * Generated from protobuf field <code>.proto.RegisteredUser userInfo = 4;</code>
     * @param \Proto\RegisteredUser $var
     * @return $this
     */
    public function setUserInfo($var)
    {
        GPBUtil::checkMessage($var, \Proto\RegisteredUser::class);
        $this->userInfo = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Member::class, \Proto\ChannelGetMemberListResponse_Member::class);

