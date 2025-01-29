<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ChatSetAction.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.ChatSetAction</code>
 */
class ChatSetAction extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>.proto.ClientAction action = 3;</code>
     */
    protected $action = 0;
    /**
     * Generated from protobuf field <code>uint32 action_id = 4;</code>
     */
    protected $action_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Proto\Request $request
     *     @type int|string $room_id
     *     @type int $action
     *     @type int $action_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\ChatSetAction::initOnce();
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
     * Generated from protobuf field <code>.proto.ClientAction action = 3;</code>
     * @return int
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Generated from protobuf field <code>.proto.ClientAction action = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkEnum($var, \Proto\ClientAction::class);
        $this->action = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 action_id = 4;</code>
     * @return int
     */
    public function getActionId()
    {
        return $this->action_id;
    }

    /**
     * Generated from protobuf field <code>uint32 action_id = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setActionId($var)
    {
        GPBUtil::checkUint32($var);
        $this->action_id = $var;

        return $this;
    }

}

