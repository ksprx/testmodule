<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Global.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.RoomMessageForwardFrom</code>
 */
class RoomMessageForwardFrom extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 room_id = 1 [jstype = JS_STRING];</code>
     */
    protected $room_id = 0;
    /**
     * Generated from protobuf field <code>uint64 message_id = 2 [jstype = JS_STRING];</code>
     */
    protected $message_id = 0;
    /**
     * Generated from protobuf field <code>uint64 document_id = 3 [jstype = JS_STRING];</code>
     */
    protected $document_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $room_id
     *     @type int|string $message_id
     *     @type int|string $document_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBGlobal::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 room_id = 1 [jstype = JS_STRING];</code>
     * @return int|string
     */
    public function getRoomId()
    {
        return $this->room_id;
    }

    /**
     * Generated from protobuf field <code>uint64 room_id = 1 [jstype = JS_STRING];</code>
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
     * Generated from protobuf field <code>uint64 message_id = 2 [jstype = JS_STRING];</code>
     * @return int|string
     */
    public function getMessageId()
    {
        return $this->message_id;
    }

    /**
     * Generated from protobuf field <code>uint64 message_id = 2 [jstype = JS_STRING];</code>
     * @param int|string $var
     * @return $this
     */
    public function setMessageId($var)
    {
        GPBUtil::checkUint64($var);
        $this->message_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 document_id = 3 [jstype = JS_STRING];</code>
     * @return int|string
     */
    public function getDocumentId()
    {
        return $this->document_id;
    }

    /**
     * Generated from protobuf field <code>uint64 document_id = 3 [jstype = JS_STRING];</code>
     * @param int|string $var
     * @return $this
     */
    public function setDocumentId($var)
    {
        GPBUtil::checkUint64($var);
        $this->document_id = $var;

        return $this;
    }

}

