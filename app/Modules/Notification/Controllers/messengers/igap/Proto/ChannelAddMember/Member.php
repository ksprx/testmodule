<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ChannelAddMember.proto

namespace Proto\ChannelAddMember;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.ChannelAddMember.Member</code>
 */
class Member extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 user_id = 1;</code>
     */
    protected $user_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $user_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\ChannelAddMember::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 user_id = 1;</code>
     * @return int|string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Generated from protobuf field <code>uint64 user_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkUint64($var);
        $this->user_id = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Member::class, \Proto\ChannelAddMember_Member::class);

