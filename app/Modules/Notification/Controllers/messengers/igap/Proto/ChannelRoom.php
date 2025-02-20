<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Global.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.ChannelRoom</code>
 */
class ChannelRoom extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.ChannelRoom.Type type = 1;</code>
     */
    protected $type = 0;
    /**
     * Generated from protobuf field <code>.proto.ChannelRoom.Role role = 2;</code>
     */
    protected $role = 0;
    /**
     * Generated from protobuf field <code>uint32 participants_count = 3;</code>
     */
    protected $participants_count = 0;
    /**
     * Generated from protobuf field <code>string participants_count_label = 4;</code>
     */
    protected $participants_count_label = '';
    /**
     * Generated from protobuf field <code>string description = 5;</code>
     */
    protected $description = '';
    /**
     * Generated from protobuf field <code>uint32 avatar_count = 6;</code>
     */
    protected $avatar_count = 0;
    /**
     * Generated from protobuf field <code>.proto.Avatar avatar = 7;</code>
     */
    protected $avatar = null;
    /**
     * Generated from protobuf field <code>.proto.ChannelRoom.PrivateExtra private_extra = 8;</code>
     */
    protected $private_extra = null;
    /**
     * Generated from protobuf field <code>.proto.ChannelRoom.PublicExtra public_extra = 9;</code>
     */
    protected $public_extra = null;
    /**
     * Generated from protobuf field <code>bool signature = 10;</code>
     */
    protected $signature = false;
    /**
     * Generated from protobuf field <code>uint64 seen_id = 11 [jstype = JS_STRING];</code>
     */
    protected $seen_id = 0;
    /**
     * Generated from protobuf field <code>bool verified = 12;</code>
     */
    protected $verified = false;
    /**
     * Generated from protobuf field <code>bool reaction_status = 13;</code>
     */
    protected $reaction_status = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *     @type int $role
     *     @type int $participants_count
     *     @type string $participants_count_label
     *     @type string $description
     *     @type int $avatar_count
     *     @type \Proto\Avatar $avatar
     *     @type \Proto\ChannelRoom\PrivateExtra $private_extra
     *     @type \Proto\ChannelRoom\PublicExtra $public_extra
     *     @type bool $signature
     *     @type int|string $seen_id
     *     @type bool $verified
     *     @type bool $reaction_status
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBGlobal::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.proto.ChannelRoom.Type type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.proto.ChannelRoom.Type type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Proto\ChannelRoom\Type::class);
        $this->type = $var;

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
     * Generated from protobuf field <code>uint32 participants_count = 3;</code>
     * @return int
     */
    public function getParticipantsCount()
    {
        return $this->participants_count;
    }

    /**
     * Generated from protobuf field <code>uint32 participants_count = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setParticipantsCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->participants_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string participants_count_label = 4;</code>
     * @return string
     */
    public function getParticipantsCountLabel()
    {
        return $this->participants_count_label;
    }

    /**
     * Generated from protobuf field <code>string participants_count_label = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setParticipantsCountLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->participants_count_label = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string description = 5;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Generated from protobuf field <code>string description = 5;</code>
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
     * Generated from protobuf field <code>uint32 avatar_count = 6;</code>
     * @return int
     */
    public function getAvatarCount()
    {
        return $this->avatar_count;
    }

    /**
     * Generated from protobuf field <code>uint32 avatar_count = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setAvatarCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->avatar_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.proto.Avatar avatar = 7;</code>
     * @return \Proto\Avatar|null
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    public function hasAvatar()
    {
        return isset($this->avatar);
    }

    public function clearAvatar()
    {
        unset($this->avatar);
    }

    /**
     * Generated from protobuf field <code>.proto.Avatar avatar = 7;</code>
     * @param \Proto\Avatar $var
     * @return $this
     */
    public function setAvatar($var)
    {
        GPBUtil::checkMessage($var, \Proto\Avatar::class);
        $this->avatar = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.proto.ChannelRoom.PrivateExtra private_extra = 8;</code>
     * @return \Proto\ChannelRoom\PrivateExtra|null
     */
    public function getPrivateExtra()
    {
        return $this->private_extra;
    }

    public function hasPrivateExtra()
    {
        return isset($this->private_extra);
    }

    public function clearPrivateExtra()
    {
        unset($this->private_extra);
    }

    /**
     * Generated from protobuf field <code>.proto.ChannelRoom.PrivateExtra private_extra = 8;</code>
     * @param \Proto\ChannelRoom\PrivateExtra $var
     * @return $this
     */
    public function setPrivateExtra($var)
    {
        GPBUtil::checkMessage($var, \Proto\ChannelRoom\PrivateExtra::class);
        $this->private_extra = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.proto.ChannelRoom.PublicExtra public_extra = 9;</code>
     * @return \Proto\ChannelRoom\PublicExtra|null
     */
    public function getPublicExtra()
    {
        return $this->public_extra;
    }

    public function hasPublicExtra()
    {
        return isset($this->public_extra);
    }

    public function clearPublicExtra()
    {
        unset($this->public_extra);
    }

    /**
     * Generated from protobuf field <code>.proto.ChannelRoom.PublicExtra public_extra = 9;</code>
     * @param \Proto\ChannelRoom\PublicExtra $var
     * @return $this
     */
    public function setPublicExtra($var)
    {
        GPBUtil::checkMessage($var, \Proto\ChannelRoom\PublicExtra::class);
        $this->public_extra = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool signature = 10;</code>
     * @return bool
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Generated from protobuf field <code>bool signature = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setSignature($var)
    {
        GPBUtil::checkBool($var);
        $this->signature = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 seen_id = 11 [jstype = JS_STRING];</code>
     * @return int|string
     */
    public function getSeenId()
    {
        return $this->seen_id;
    }

    /**
     * Generated from protobuf field <code>uint64 seen_id = 11 [jstype = JS_STRING];</code>
     * @param int|string $var
     * @return $this
     */
    public function setSeenId($var)
    {
        GPBUtil::checkUint64($var);
        $this->seen_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool verified = 12;</code>
     * @return bool
     */
    public function getVerified()
    {
        return $this->verified;
    }

    /**
     * Generated from protobuf field <code>bool verified = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setVerified($var)
    {
        GPBUtil::checkBool($var);
        $this->verified = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool reaction_status = 13;</code>
     * @return bool
     */
    public function getReactionStatus()
    {
        return $this->reaction_status;
    }

    /**
     * Generated from protobuf field <code>bool reaction_status = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setReactionStatus($var)
    {
        GPBUtil::checkBool($var);
        $this->reaction_status = $var;

        return $this;
    }

}

