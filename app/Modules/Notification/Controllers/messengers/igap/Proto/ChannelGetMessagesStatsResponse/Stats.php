<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ChannelGetMessagesStats.proto

namespace Proto\ChannelGetMessagesStatsResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.ChannelGetMessagesStatsResponse.Stats</code>
 */
class Stats extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 message_id = 1;</code>
     */
    protected $message_id = 0;
    /**
     * Generated from protobuf field <code>string views_label = 2;</code>
     */
    protected $views_label = '';
    /**
     * Generated from protobuf field <code>string thumbs_up_label = 3;</code>
     */
    protected $thumbs_up_label = '';
    /**
     * Generated from protobuf field <code>string thumbs_down_label = 4;</code>
     */
    protected $thumbs_down_label = '';
    /**
     * Generated from protobuf field <code>uint64 document_id = 5;</code>
     */
    protected $document_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $message_id
     *     @type string $views_label
     *     @type string $thumbs_up_label
     *     @type string $thumbs_down_label
     *     @type int|string $document_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\ChannelGetMessagesStats::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 message_id = 1;</code>
     * @return int|string
     */
    public function getMessageId()
    {
        return $this->message_id;
    }

    /**
     * Generated from protobuf field <code>uint64 message_id = 1;</code>
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
     * Generated from protobuf field <code>string views_label = 2;</code>
     * @return string
     */
    public function getViewsLabel()
    {
        return $this->views_label;
    }

    /**
     * Generated from protobuf field <code>string views_label = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setViewsLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->views_label = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string thumbs_up_label = 3;</code>
     * @return string
     */
    public function getThumbsUpLabel()
    {
        return $this->thumbs_up_label;
    }

    /**
     * Generated from protobuf field <code>string thumbs_up_label = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setThumbsUpLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->thumbs_up_label = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string thumbs_down_label = 4;</code>
     * @return string
     */
    public function getThumbsDownLabel()
    {
        return $this->thumbs_down_label;
    }

    /**
     * Generated from protobuf field <code>string thumbs_down_label = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setThumbsDownLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->thumbs_down_label = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 document_id = 5;</code>
     * @return int|string
     */
    public function getDocumentId()
    {
        return $this->document_id;
    }

    /**
     * Generated from protobuf field <code>uint64 document_id = 5;</code>
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Stats::class, \Proto\ChannelGetMessagesStatsResponse_Stats::class);

