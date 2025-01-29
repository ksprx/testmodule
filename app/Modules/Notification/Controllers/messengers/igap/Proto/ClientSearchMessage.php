<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ClientSearchMessage.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.ClientSearchMessage</code>
 */
class ClientSearchMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Request request = 1;</code>
     */
    protected $request = null;
    /**
     * Generated from protobuf field <code>string query = 2;</code>
     */
    protected $query = '';
    /**
     * Generated from protobuf field <code>uint64 roomId = 3;</code>
     */
    protected $roomId = 0;
    /**
     * Generated from protobuf field <code>uint64 start_time = 4;</code>
     */
    protected $start_time = 0;
    /**
     * Generated from protobuf field <code>uint64 end_time = 5;</code>
     */
    protected $end_time = 0;
    /**
     * Generated from protobuf field <code>uint32 room_offset = 6;</code>
     */
    protected $room_offset = 0;
    /**
     * Generated from protobuf field <code>uint32 room_limit = 7;</code>
     */
    protected $room_limit = 0;
    /**
     * Generated from protobuf field <code>.proto.SearchType type = 8;</code>
     */
    protected $type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Proto\Request $request
     *     @type string $query
     *     @type int|string $roomId
     *     @type int|string $start_time
     *     @type int|string $end_time
     *     @type int $room_offset
     *     @type int $room_limit
     *     @type int $type
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\ClientSearchMessage::initOnce();
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
     * Generated from protobuf field <code>string query = 2;</code>
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Generated from protobuf field <code>string query = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->query = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 roomId = 3;</code>
     * @return int|string
     */
    public function getRoomId()
    {
        return $this->roomId;
    }

    /**
     * Generated from protobuf field <code>uint64 roomId = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRoomId($var)
    {
        GPBUtil::checkUint64($var);
        $this->roomId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 start_time = 4;</code>
     * @return int|string
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * Generated from protobuf field <code>uint64 start_time = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkUint64($var);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 end_time = 5;</code>
     * @return int|string
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    /**
     * Generated from protobuf field <code>uint64 end_time = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkUint64($var);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 room_offset = 6;</code>
     * @return int
     */
    public function getRoomOffset()
    {
        return $this->room_offset;
    }

    /**
     * Generated from protobuf field <code>uint32 room_offset = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setRoomOffset($var)
    {
        GPBUtil::checkUint32($var);
        $this->room_offset = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 room_limit = 7;</code>
     * @return int
     */
    public function getRoomLimit()
    {
        return $this->room_limit;
    }

    /**
     * Generated from protobuf field <code>uint32 room_limit = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setRoomLimit($var)
    {
        GPBUtil::checkUint32($var);
        $this->room_limit = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.proto.SearchType type = 8;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.proto.SearchType type = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Proto\SearchType::class);
        $this->type = $var;

        return $this;
    }

}

