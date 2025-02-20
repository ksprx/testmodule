<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: InternalUpdateRoom.proto

namespace Proto\Updatequeue;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.updatequeue.InternalUpdateRoom</code>
 */
class InternalUpdateRoom extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 sender_user_id = 1;</code>
     */
    protected $sender_user_id = 0;
    /**
     * Generated from protobuf field <code>uint64 room_id = 2;</code>
     */
    protected $room_id = 0;
    /**
     * Generated from protobuf field <code>string class_name = 3;</code>
     */
    protected $class_name = '';
    /**
     * Generated from protobuf field <code>uint64 action_id = 4;</code>
     */
    protected $action_id = 0;
    /**
     * Generated from protobuf field <code>string request_id = 5;</code>
     */
    protected $request_id = '';
    /**
     * Generated from protobuf field <code>bytes wrapped_proto = 6;</code>
     */
    protected $wrapped_proto = '';
    /**
     * Generated from protobuf field <code>string sender_session_id = 7;</code>
     */
    protected $sender_session_id = '';
    /**
     * Generated from protobuf field <code>uint64 expiration_time = 8;</code>
     */
    protected $expiration_time = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $sender_user_id
     *     @type int|string $room_id
     *     @type string $class_name
     *     @type int|string $action_id
     *     @type string $request_id
     *     @type string $wrapped_proto
     *     @type string $sender_session_id
     *     @type int|string $expiration_time
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\InternalUpdateRoom::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 sender_user_id = 1;</code>
     * @return int|string
     */
    public function getSenderUserId()
    {
        return $this->sender_user_id;
    }

    /**
     * Generated from protobuf field <code>uint64 sender_user_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSenderUserId($var)
    {
        GPBUtil::checkUint64($var);
        $this->sender_user_id = $var;

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
     * Generated from protobuf field <code>string class_name = 3;</code>
     * @return string
     */
    public function getClassName()
    {
        return $this->class_name;
    }

    /**
     * Generated from protobuf field <code>string class_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setClassName($var)
    {
        GPBUtil::checkString($var, True);
        $this->class_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 action_id = 4;</code>
     * @return int|string
     */
    public function getActionId()
    {
        return $this->action_id;
    }

    /**
     * Generated from protobuf field <code>uint64 action_id = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setActionId($var)
    {
        GPBUtil::checkUint64($var);
        $this->action_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string request_id = 5;</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Generated from protobuf field <code>string request_id = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes wrapped_proto = 6;</code>
     * @return string
     */
    public function getWrappedProto()
    {
        return $this->wrapped_proto;
    }

    /**
     * Generated from protobuf field <code>bytes wrapped_proto = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setWrappedProto($var)
    {
        GPBUtil::checkString($var, False);
        $this->wrapped_proto = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string sender_session_id = 7;</code>
     * @return string
     */
    public function getSenderSessionId()
    {
        return $this->sender_session_id;
    }

    /**
     * Generated from protobuf field <code>string sender_session_id = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setSenderSessionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->sender_session_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 expiration_time = 8;</code>
     * @return int|string
     */
    public function getExpirationTime()
    {
        return $this->expiration_time;
    }

    /**
     * Generated from protobuf field <code>uint64 expiration_time = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setExpirationTime($var)
    {
        GPBUtil::checkUint64($var);
        $this->expiration_time = $var;

        return $this;
    }

}

