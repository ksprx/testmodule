<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ClientUpdate.proto

namespace Proto\Updatequeue;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.updatequeue.Update</code>
 */
class Update extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 pts = 1;</code>
     */
    protected $pts = 0;
    /**
     * Generated from protobuf field <code>uint64 seq = 2;</code>
     */
    protected $seq = 0;
    /**
     * Generated from protobuf field <code>uint64 action_id = 3;</code>
     */
    protected $action_id = 0;
    /**
     * Generated from protobuf field <code>bytes wrapped_proto = 4;</code>
     */
    protected $wrapped_proto = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $pts
     *     @type int|string $seq
     *     @type int|string $action_id
     *     @type string $wrapped_proto
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\ClientUpdate::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 pts = 1;</code>
     * @return int|string
     */
    public function getPts()
    {
        return $this->pts;
    }

    /**
     * Generated from protobuf field <code>uint64 pts = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPts($var)
    {
        GPBUtil::checkUint64($var);
        $this->pts = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 seq = 2;</code>
     * @return int|string
     */
    public function getSeq()
    {
        return $this->seq;
    }

    /**
     * Generated from protobuf field <code>uint64 seq = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSeq($var)
    {
        GPBUtil::checkUint64($var);
        $this->seq = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 action_id = 3;</code>
     * @return int|string
     */
    public function getActionId()
    {
        return $this->action_id;
    }

    /**
     * Generated from protobuf field <code>uint64 action_id = 3;</code>
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
     * Generated from protobuf field <code>bytes wrapped_proto = 4;</code>
     * @return string
     */
    public function getWrappedProto()
    {
        return $this->wrapped_proto;
    }

    /**
     * Generated from protobuf field <code>bytes wrapped_proto = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setWrappedProto($var)
    {
        GPBUtil::checkString($var, False);
        $this->wrapped_proto = $var;

        return $this;
    }

}

