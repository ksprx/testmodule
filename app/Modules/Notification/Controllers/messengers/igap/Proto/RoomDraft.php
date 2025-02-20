<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Global.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.RoomDraft</code>
 */
class RoomDraft extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string message = 1;</code>
     */
    protected $message = '';
    /**
     * Generated from protobuf field <code>uint64 reply_to = 2 [jstype = JS_STRING];</code>
     */
    protected $reply_to = 0;
    /**
     * Generated from protobuf field <code>uint32 draft_time = 3;</code>
     */
    protected $draft_time = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $message
     *     @type int|string $reply_to
     *     @type int $draft_time
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
     * Generated from protobuf field <code>uint64 reply_to = 2 [jstype = JS_STRING];</code>
     * @return int|string
     */
    public function getReplyTo()
    {
        return $this->reply_to;
    }

    /**
     * Generated from protobuf field <code>uint64 reply_to = 2 [jstype = JS_STRING];</code>
     * @param int|string $var
     * @return $this
     */
    public function setReplyTo($var)
    {
        GPBUtil::checkUint64($var);
        $this->reply_to = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 draft_time = 3;</code>
     * @return int
     */
    public function getDraftTime()
    {
        return $this->draft_time;
    }

    /**
     * Generated from protobuf field <code>uint32 draft_time = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setDraftTime($var)
    {
        GPBUtil::checkUint32($var);
        $this->draft_time = $var;

        return $this;
    }

}

