<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: GroupEditMessage.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.GroupEditMessage</code>
 */
class GroupEditMessage extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>uint64 message_id = 3;</code>
     */
    protected $message_id = 0;
    /**
     * Generated from protobuf field <code>string message = 4;</code>
     */
    protected $message = '';
    /**
     * Generated from protobuf field <code>uint64 document_id = 5;</code>
     */
    protected $document_id = 0;
    /**
     * Generated from protobuf field <code>.proto.TextSigns text_signs = 6;</code>
     */
    protected $text_signs = null;
    /**
     * Generated from protobuf field <code>.proto.Mention mentions = 7;</code>
     */
    protected $mentions = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Proto\Request $request
     *     @type int|string $room_id
     *     @type int|string $message_id
     *     @type string $message
     *     @type int|string $document_id
     *     @type \Proto\TextSigns $text_signs
     *     @type \Proto\Mention $mentions
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\GroupEditMessage::initOnce();
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
     * Generated from protobuf field <code>uint64 message_id = 3;</code>
     * @return int|string
     */
    public function getMessageId()
    {
        return $this->message_id;
    }

    /**
     * Generated from protobuf field <code>uint64 message_id = 3;</code>
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
     * Generated from protobuf field <code>string message = 4;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Generated from protobuf field <code>string message = 4;</code>
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

    /**
     * Generated from protobuf field <code>.proto.TextSigns text_signs = 6;</code>
     * @return \Proto\TextSigns|null
     */
    public function getTextSigns()
    {
        return $this->text_signs;
    }

    public function hasTextSigns()
    {
        return isset($this->text_signs);
    }

    public function clearTextSigns()
    {
        unset($this->text_signs);
    }

    /**
     * Generated from protobuf field <code>.proto.TextSigns text_signs = 6;</code>
     * @param \Proto\TextSigns $var
     * @return $this
     */
    public function setTextSigns($var)
    {
        GPBUtil::checkMessage($var, \Proto\TextSigns::class);
        $this->text_signs = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.proto.Mention mentions = 7;</code>
     * @return \Proto\Mention|null
     */
    public function getMentions()
    {
        return $this->mentions;
    }

    public function hasMentions()
    {
        return isset($this->mentions);
    }

    public function clearMentions()
    {
        unset($this->mentions);
    }

    /**
     * Generated from protobuf field <code>.proto.Mention mentions = 7;</code>
     * @param \Proto\Mention $var
     * @return $this
     */
    public function setMentions($var)
    {
        GPBUtil::checkMessage($var, \Proto\Mention::class);
        $this->mentions = $var;

        return $this;
    }

}

