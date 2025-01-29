<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Global.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.PostMessageRights</code>
 */
class PostMessageRights extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool send_text = 1;</code>
     */
    protected $send_text = false;
    /**
     * Generated from protobuf field <code>bool send_media = 3;</code>
     */
    protected $send_media = false;
    /**
     * Generated from protobuf field <code>bool send_gif = 4;</code>
     */
    protected $send_gif = false;
    /**
     * Generated from protobuf field <code>bool send_sticker = 5;</code>
     */
    protected $send_sticker = false;
    /**
     * Generated from protobuf field <code>bool send_link = 6;</code>
     */
    protected $send_link = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $send_text
     *     @type bool $send_media
     *     @type bool $send_gif
     *     @type bool $send_sticker
     *     @type bool $send_link
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBGlobal::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool send_text = 1;</code>
     * @return bool
     */
    public function getSendText()
    {
        return $this->send_text;
    }

    /**
     * Generated from protobuf field <code>bool send_text = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setSendText($var)
    {
        GPBUtil::checkBool($var);
        $this->send_text = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool send_media = 3;</code>
     * @return bool
     */
    public function getSendMedia()
    {
        return $this->send_media;
    }

    /**
     * Generated from protobuf field <code>bool send_media = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setSendMedia($var)
    {
        GPBUtil::checkBool($var);
        $this->send_media = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool send_gif = 4;</code>
     * @return bool
     */
    public function getSendGif()
    {
        return $this->send_gif;
    }

    /**
     * Generated from protobuf field <code>bool send_gif = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setSendGif($var)
    {
        GPBUtil::checkBool($var);
        $this->send_gif = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool send_sticker = 5;</code>
     * @return bool
     */
    public function getSendSticker()
    {
        return $this->send_sticker;
    }

    /**
     * Generated from protobuf field <code>bool send_sticker = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setSendSticker($var)
    {
        GPBUtil::checkBool($var);
        $this->send_sticker = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool send_link = 6;</code>
     * @return bool
     */
    public function getSendLink()
    {
        return $this->send_link;
    }

    /**
     * Generated from protobuf field <code>bool send_link = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setSendLink($var)
    {
        GPBUtil::checkBool($var);
        $this->send_link = $var;

        return $this;
    }

}

