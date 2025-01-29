<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: QrCodeNewDevice.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.QrCodeNewDevice</code>
 */
class QrCodeNewDevice extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Request request = 1;</code>
     */
    protected $request = null;
    /**
     * Generated from protobuf field <code>string app_name = 2;</code>
     */
    protected $app_name = '';
    /**
     * Generated from protobuf field <code>uint32 app_id = 3;</code>
     */
    protected $app_id = 0;
    /**
     * Generated from protobuf field <code>uint32 app_build_version = 4;</code>
     */
    protected $app_build_version = 0;
    /**
     * Generated from protobuf field <code>string app_version = 5;</code>
     */
    protected $app_version = '';
    /**
     * Generated from protobuf field <code>.proto.Platform platform = 6;</code>
     */
    protected $platform = 0;
    /**
     * Generated from protobuf field <code>string platform_version = 7;</code>
     */
    protected $platform_version = '';
    /**
     * Generated from protobuf field <code>.proto.Device device = 8;</code>
     */
    protected $device = 0;
    /**
     * Generated from protobuf field <code>string device_name = 9;</code>
     */
    protected $device_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Proto\Request $request
     *     @type string $app_name
     *     @type int $app_id
     *     @type int $app_build_version
     *     @type string $app_version
     *     @type int $platform
     *     @type string $platform_version
     *     @type int $device
     *     @type string $device_name
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\QrCodeNewDevice::initOnce();
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
     * Generated from protobuf field <code>string app_name = 2;</code>
     * @return string
     */
    public function getAppName()
    {
        return $this->app_name;
    }

    /**
     * Generated from protobuf field <code>string app_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAppName($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 app_id = 3;</code>
     * @return int
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * Generated from protobuf field <code>uint32 app_id = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setAppId($var)
    {
        GPBUtil::checkUint32($var);
        $this->app_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 app_build_version = 4;</code>
     * @return int
     */
    public function getAppBuildVersion()
    {
        return $this->app_build_version;
    }

    /**
     * Generated from protobuf field <code>uint32 app_build_version = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setAppBuildVersion($var)
    {
        GPBUtil::checkUint32($var);
        $this->app_build_version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string app_version = 5;</code>
     * @return string
     */
    public function getAppVersion()
    {
        return $this->app_version;
    }

    /**
     * Generated from protobuf field <code>string app_version = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setAppVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.proto.Platform platform = 6;</code>
     * @return int
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * Generated from protobuf field <code>.proto.Platform platform = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setPlatform($var)
    {
        GPBUtil::checkEnum($var, \Proto\Platform::class);
        $this->platform = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string platform_version = 7;</code>
     * @return string
     */
    public function getPlatformVersion()
    {
        return $this->platform_version;
    }

    /**
     * Generated from protobuf field <code>string platform_version = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setPlatformVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->platform_version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.proto.Device device = 8;</code>
     * @return int
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * Generated from protobuf field <code>.proto.Device device = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setDevice($var)
    {
        GPBUtil::checkEnum($var, \Proto\Device::class);
        $this->device = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string device_name = 9;</code>
     * @return string
     */
    public function getDeviceName()
    {
        return $this->device_name;
    }

    /**
     * Generated from protobuf field <code>string device_name = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setDeviceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->device_name = $var;

        return $this;
    }

}

