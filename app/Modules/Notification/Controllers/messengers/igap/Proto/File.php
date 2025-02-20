<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Global.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.File</code>
 */
class File extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string token = 1;</code>
     */
    protected $token = '';
    /**
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>int64 size = 3;</code>
     */
    protected $size = 0;
    /**
     * Generated from protobuf field <code>.proto.Thumbnail large_thumbnail = 4;</code>
     */
    protected $large_thumbnail = null;
    /**
     * Generated from protobuf field <code>.proto.Thumbnail small_thumbnail = 5;</code>
     */
    protected $small_thumbnail = null;
    /**
     * Generated from protobuf field <code>.proto.Thumbnail waveform_thumbnail = 6;</code>
     */
    protected $waveform_thumbnail = null;
    /**
     * Generated from protobuf field <code>int32 width = 7;</code>
     */
    protected $width = 0;
    /**
     * Generated from protobuf field <code>int32 height = 8;</code>
     */
    protected $height = 0;
    /**
     * Generated from protobuf field <code>double duration = 9;</code>
     */
    protected $duration = 0.0;
    /**
     * Generated from protobuf field <code>string cache_id = 10;</code>
     */
    protected $cache_id = '';
    /**
     * Generated from protobuf field <code>string mime = 11;</code>
     */
    protected $mime = '';
    /**
     * Generated from protobuf field <code>string public_url = 12;</code>
     */
    protected $public_url = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $token
     *     @type string $name
     *     @type int|string $size
     *     @type \Proto\Thumbnail $large_thumbnail
     *     @type \Proto\Thumbnail $small_thumbnail
     *     @type \Proto\Thumbnail $waveform_thumbnail
     *     @type int $width
     *     @type int $height
     *     @type float $duration
     *     @type string $cache_id
     *     @type string $mime
     *     @type string $public_url
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBGlobal::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string token = 1;</code>
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Generated from protobuf field <code>string token = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->token = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 size = 3;</code>
     * @return int|string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Generated from protobuf field <code>int64 size = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->size = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.proto.Thumbnail large_thumbnail = 4;</code>
     * @return \Proto\Thumbnail|null
     */
    public function getLargeThumbnail()
    {
        return $this->large_thumbnail;
    }

    public function hasLargeThumbnail()
    {
        return isset($this->large_thumbnail);
    }

    public function clearLargeThumbnail()
    {
        unset($this->large_thumbnail);
    }

    /**
     * Generated from protobuf field <code>.proto.Thumbnail large_thumbnail = 4;</code>
     * @param \Proto\Thumbnail $var
     * @return $this
     */
    public function setLargeThumbnail($var)
    {
        GPBUtil::checkMessage($var, \Proto\Thumbnail::class);
        $this->large_thumbnail = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.proto.Thumbnail small_thumbnail = 5;</code>
     * @return \Proto\Thumbnail|null
     */
    public function getSmallThumbnail()
    {
        return $this->small_thumbnail;
    }

    public function hasSmallThumbnail()
    {
        return isset($this->small_thumbnail);
    }

    public function clearSmallThumbnail()
    {
        unset($this->small_thumbnail);
    }

    /**
     * Generated from protobuf field <code>.proto.Thumbnail small_thumbnail = 5;</code>
     * @param \Proto\Thumbnail $var
     * @return $this
     */
    public function setSmallThumbnail($var)
    {
        GPBUtil::checkMessage($var, \Proto\Thumbnail::class);
        $this->small_thumbnail = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.proto.Thumbnail waveform_thumbnail = 6;</code>
     * @return \Proto\Thumbnail|null
     */
    public function getWaveformThumbnail()
    {
        return $this->waveform_thumbnail;
    }

    public function hasWaveformThumbnail()
    {
        return isset($this->waveform_thumbnail);
    }

    public function clearWaveformThumbnail()
    {
        unset($this->waveform_thumbnail);
    }

    /**
     * Generated from protobuf field <code>.proto.Thumbnail waveform_thumbnail = 6;</code>
     * @param \Proto\Thumbnail $var
     * @return $this
     */
    public function setWaveformThumbnail($var)
    {
        GPBUtil::checkMessage($var, \Proto\Thumbnail::class);
        $this->waveform_thumbnail = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 width = 7;</code>
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Generated from protobuf field <code>int32 width = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setWidth($var)
    {
        GPBUtil::checkInt32($var);
        $this->width = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 height = 8;</code>
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Generated from protobuf field <code>int32 height = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setHeight($var)
    {
        GPBUtil::checkInt32($var);
        $this->height = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double duration = 9;</code>
     * @return float
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Generated from protobuf field <code>double duration = 9;</code>
     * @param float $var
     * @return $this
     */
    public function setDuration($var)
    {
        GPBUtil::checkDouble($var);
        $this->duration = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string cache_id = 10;</code>
     * @return string
     */
    public function getCacheId()
    {
        return $this->cache_id;
    }

    /**
     * Generated from protobuf field <code>string cache_id = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setCacheId($var)
    {
        GPBUtil::checkString($var, True);
        $this->cache_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string mime = 11;</code>
     * @return string
     */
    public function getMime()
    {
        return $this->mime;
    }

    /**
     * Generated from protobuf field <code>string mime = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setMime($var)
    {
        GPBUtil::checkString($var, True);
        $this->mime = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string public_url = 12;</code>
     * @return string
     */
    public function getPublicUrl()
    {
        return $this->public_url;
    }

    /**
     * Generated from protobuf field <code>string public_url = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setPublicUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->public_url = $var;

        return $this;
    }

}

