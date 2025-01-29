<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Global.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.RoomMessageStoryReply</code>
 */
class RoomMessageStoryReply extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 story_id = 1 [jstype = JS_STRING];</code>
     */
    protected $story_id = 0;
    /**
     * Generated from protobuf field <code>string caption = 2;</code>
     */
    protected $caption = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $story_id
     *     @type string $caption
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBGlobal::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 story_id = 1 [jstype = JS_STRING];</code>
     * @return int|string
     */
    public function getStoryId()
    {
        return $this->story_id;
    }

    /**
     * Generated from protobuf field <code>uint64 story_id = 1 [jstype = JS_STRING];</code>
     * @param int|string $var
     * @return $this
     */
    public function setStoryId($var)
    {
        GPBUtil::checkUint64($var);
        $this->story_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string caption = 2;</code>
     * @return string
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * Generated from protobuf field <code>string caption = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCaption($var)
    {
        GPBUtil::checkString($var, True);
        $this->caption = $var;

        return $this;
    }

}

