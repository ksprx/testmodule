<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Global.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.RegisteredUser</code>
 */
class RegisteredUser extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 id = 1 [jstype = JS_STRING];</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>string username = 2;</code>
     */
    protected $username = '';
    /**
     * Generated from protobuf field <code>uint64 phone = 3 [jstype = JS_STRING];</code>
     */
    protected $phone = 0;
    /**
     * Generated from protobuf field <code>string first_name = 4;</code>
     */
    protected $first_name = '';
    /**
     * Generated from protobuf field <code>string last_name = 5;</code>
     */
    protected $last_name = '';
    /**
     * Generated from protobuf field <code>string display_name = 6;</code>
     */
    protected $display_name = '';
    /**
     * Generated from protobuf field <code>string initials = 7;</code>
     */
    protected $initials = '';
    /**
     * Generated from protobuf field <code>string color = 8;</code>
     */
    protected $color = '';
    /**
     * Generated from protobuf field <code>.proto.RegisteredUser.Status status = 9;</code>
     */
    protected $status = 0;
    /**
     * Generated from protobuf field <code>uint32 last_seen = 10;</code>
     */
    protected $last_seen = 0;
    /**
     * Generated from protobuf field <code>uint32 avatar_count = 11;</code>
     */
    protected $avatar_count = 0;
    /**
     * Generated from protobuf field <code>.proto.Avatar avatar = 12;</code>
     */
    protected $avatar = null;
    /**
     * Generated from protobuf field <code>bool mutual = 13;</code>
     */
    protected $mutual = false;
    /**
     * Generated from protobuf field <code>bool deleted = 14;</code>
     */
    protected $deleted = false;
    /**
     * Generated from protobuf field <code>string cache_id = 15;</code>
     */
    protected $cache_id = '';
    /**
     * Generated from protobuf field <code>string bio = 16;</code>
     */
    protected $bio = '';
    /**
     * Generated from protobuf field <code>bool verified = 17;</code>
     */
    protected $verified = false;
    /**
     * Generated from protobuf field <code>bool bot = 18;</code>
     */
    protected $bot = false;
    /**
     * Generated from protobuf field <code>bool mxb_enable = 19;</code>
     */
    protected $mxb_enable = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $id
     *     @type string $username
     *     @type int|string $phone
     *     @type string $first_name
     *     @type string $last_name
     *     @type string $display_name
     *     @type string $initials
     *     @type string $color
     *     @type int $status
     *     @type int $last_seen
     *     @type int $avatar_count
     *     @type \Proto\Avatar $avatar
     *     @type bool $mutual
     *     @type bool $deleted
     *     @type string $cache_id
     *     @type string $bio
     *     @type bool $verified
     *     @type bool $bot
     *     @type bool $mxb_enable
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBGlobal::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 id = 1 [jstype = JS_STRING];</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>uint64 id = 1 [jstype = JS_STRING];</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string username = 2;</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Generated from protobuf field <code>string username = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUsername($var)
    {
        GPBUtil::checkString($var, True);
        $this->username = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 phone = 3 [jstype = JS_STRING];</code>
     * @return int|string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Generated from protobuf field <code>uint64 phone = 3 [jstype = JS_STRING];</code>
     * @param int|string $var
     * @return $this
     */
    public function setPhone($var)
    {
        GPBUtil::checkUint64($var);
        $this->phone = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string first_name = 4;</code>
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Generated from protobuf field <code>string first_name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFirstName($var)
    {
        GPBUtil::checkString($var, True);
        $this->first_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string last_name = 5;</code>
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Generated from protobuf field <code>string last_name = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setLastName($var)
    {
        GPBUtil::checkString($var, True);
        $this->last_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string display_name = 6;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Generated from protobuf field <code>string display_name = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string initials = 7;</code>
     * @return string
     */
    public function getInitials()
    {
        return $this->initials;
    }

    /**
     * Generated from protobuf field <code>string initials = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setInitials($var)
    {
        GPBUtil::checkString($var, True);
        $this->initials = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string color = 8;</code>
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Generated from protobuf field <code>string color = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setColor($var)
    {
        GPBUtil::checkString($var, True);
        $this->color = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.proto.RegisteredUser.Status status = 9;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.proto.RegisteredUser.Status status = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Proto\RegisteredUser\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 last_seen = 10;</code>
     * @return int
     */
    public function getLastSeen()
    {
        return $this->last_seen;
    }

    /**
     * Generated from protobuf field <code>uint32 last_seen = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setLastSeen($var)
    {
        GPBUtil::checkUint32($var);
        $this->last_seen = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 avatar_count = 11;</code>
     * @return int
     */
    public function getAvatarCount()
    {
        return $this->avatar_count;
    }

    /**
     * Generated from protobuf field <code>uint32 avatar_count = 11;</code>
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
     * Generated from protobuf field <code>.proto.Avatar avatar = 12;</code>
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
     * Generated from protobuf field <code>.proto.Avatar avatar = 12;</code>
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
     * Generated from protobuf field <code>bool mutual = 13;</code>
     * @return bool
     */
    public function getMutual()
    {
        return $this->mutual;
    }

    /**
     * Generated from protobuf field <code>bool mutual = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setMutual($var)
    {
        GPBUtil::checkBool($var);
        $this->mutual = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool deleted = 14;</code>
     * @return bool
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Generated from protobuf field <code>bool deleted = 14;</code>
     * @param bool $var
     * @return $this
     */
    public function setDeleted($var)
    {
        GPBUtil::checkBool($var);
        $this->deleted = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string cache_id = 15;</code>
     * @return string
     */
    public function getCacheId()
    {
        return $this->cache_id;
    }

    /**
     * Generated from protobuf field <code>string cache_id = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setCacheId($var)
    {
        GPBUtil::checkString($var, True);
        $this->cache_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string bio = 16;</code>
     * @return string
     */
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * Generated from protobuf field <code>string bio = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setBio($var)
    {
        GPBUtil::checkString($var, True);
        $this->bio = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool verified = 17;</code>
     * @return bool
     */
    public function getVerified()
    {
        return $this->verified;
    }

    /**
     * Generated from protobuf field <code>bool verified = 17;</code>
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
     * Generated from protobuf field <code>bool bot = 18;</code>
     * @return bool
     */
    public function getBot()
    {
        return $this->bot;
    }

    /**
     * Generated from protobuf field <code>bool bot = 18;</code>
     * @param bool $var
     * @return $this
     */
    public function setBot($var)
    {
        GPBUtil::checkBool($var);
        $this->bot = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool mxb_enable = 19;</code>
     * @return bool
     */
    public function getMxbEnable()
    {
        return $this->mxb_enable;
    }

    /**
     * Generated from protobuf field <code>bool mxb_enable = 19;</code>
     * @param bool $var
     * @return $this
     */
    public function setMxbEnable($var)
    {
        GPBUtil::checkBool($var);
        $this->mxb_enable = $var;

        return $this;
    }

}

