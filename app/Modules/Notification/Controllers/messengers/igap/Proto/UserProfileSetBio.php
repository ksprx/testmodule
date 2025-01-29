<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: UserProfileSetBio.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.UserProfileSetBio</code>
 */
class UserProfileSetBio extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Request request = 1;</code>
     */
    protected $request = null;
    /**
     * Generated from protobuf field <code>string bio = 2;</code>
     */
    protected $bio = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Proto\Request $request
     *     @type string $bio
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\UserProfileSetBio::initOnce();
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
     * Generated from protobuf field <code>string bio = 2;</code>
     * @return string
     */
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * Generated from protobuf field <code>string bio = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setBio($var)
    {
        GPBUtil::checkString($var, True);
        $this->bio = $var;

        return $this;
    }

}

