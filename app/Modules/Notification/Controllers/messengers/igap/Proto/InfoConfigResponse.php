<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: InfoConfig.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.InfoConfigResponse</code>
 */
class InfoConfigResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Response response = 1;</code>
     */
    protected $response = null;
    /**
     * Generated from protobuf field <code>bool debug_mode = 2;</code>
     */
    protected $debug_mode = false;
    /**
     * Generated from protobuf field <code>uint32 default_timeout = 3;</code>
     */
    protected $default_timeout = 0;
    /**
     * Generated from protobuf field <code>bool optimize_mode = 4;</code>
     */
    protected $optimize_mode = false;
    /**
     * Generated from protobuf field <code>uint64 max_file_size = 5;</code>
     */
    protected $max_file_size = 0;
    /**
     * Generated from protobuf field <code>uint64 caption_length_max = 6;</code>
     */
    protected $caption_length_max = 0;
    /**
     * Generated from protobuf field <code>uint64 message_length_max = 7;</code>
     */
    protected $message_length_max = 0;
    /**
     * Generated from protobuf field <code>uint32 group_add_member_limit = 8;</code>
     */
    protected $group_add_member_limit = 0;
    /**
     * Generated from protobuf field <code>uint32 channel_add_member_limit = 9;</code>
     */
    protected $channel_add_member_limit = 0;
    /**
     * Generated from protobuf field <code>repeated .proto.MicroService micro_service = 10;</code>
     */
    private $micro_service;
    /**
     * Generated from protobuf field <code>.proto.InfoConfigResponse.Debugger debugger = 11;</code>
     */
    protected $debugger = 0;
    /**
     * Generated from protobuf field <code>string base_url = 12;</code>
     */
    protected $base_url = '';
    /**
     * Generated from protobuf field <code>bool show_advertising = 13;</code>
     */
    protected $show_advertising = false;
    /**
     * Generated from protobuf field <code>.proto.InfoConfigResponse.Tab defaultTab = 14;</code>
     */
    protected $defaultTab = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Proto\Response $response
     *     @type bool $debug_mode
     *     @type int $default_timeout
     *     @type bool $optimize_mode
     *     @type int|string $max_file_size
     *     @type int|string $caption_length_max
     *     @type int|string $message_length_max
     *     @type int $group_add_member_limit
     *     @type int $channel_add_member_limit
     *     @type array<\Proto\MicroService>|\Google\Protobuf\Internal\RepeatedField $micro_service
     *     @type int $debugger
     *     @type string $base_url
     *     @type bool $show_advertising
     *     @type int $defaultTab
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\InfoConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.proto.Response response = 1;</code>
     * @return \Proto\Response|null
     */
    public function getResponse()
    {
        return $this->response;
    }

    public function hasResponse()
    {
        return isset($this->response);
    }

    public function clearResponse()
    {
        unset($this->response);
    }

    /**
     * Generated from protobuf field <code>.proto.Response response = 1;</code>
     * @param \Proto\Response $var
     * @return $this
     */
    public function setResponse($var)
    {
        GPBUtil::checkMessage($var, \Proto\Response::class);
        $this->response = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool debug_mode = 2;</code>
     * @return bool
     */
    public function getDebugMode()
    {
        return $this->debug_mode;
    }

    /**
     * Generated from protobuf field <code>bool debug_mode = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setDebugMode($var)
    {
        GPBUtil::checkBool($var);
        $this->debug_mode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 default_timeout = 3;</code>
     * @return int
     */
    public function getDefaultTimeout()
    {
        return $this->default_timeout;
    }

    /**
     * Generated from protobuf field <code>uint32 default_timeout = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setDefaultTimeout($var)
    {
        GPBUtil::checkUint32($var);
        $this->default_timeout = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool optimize_mode = 4;</code>
     * @return bool
     */
    public function getOptimizeMode()
    {
        return $this->optimize_mode;
    }

    /**
     * Generated from protobuf field <code>bool optimize_mode = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setOptimizeMode($var)
    {
        GPBUtil::checkBool($var);
        $this->optimize_mode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 max_file_size = 5;</code>
     * @return int|string
     */
    public function getMaxFileSize()
    {
        return $this->max_file_size;
    }

    /**
     * Generated from protobuf field <code>uint64 max_file_size = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMaxFileSize($var)
    {
        GPBUtil::checkUint64($var);
        $this->max_file_size = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 caption_length_max = 6;</code>
     * @return int|string
     */
    public function getCaptionLengthMax()
    {
        return $this->caption_length_max;
    }

    /**
     * Generated from protobuf field <code>uint64 caption_length_max = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCaptionLengthMax($var)
    {
        GPBUtil::checkUint64($var);
        $this->caption_length_max = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 message_length_max = 7;</code>
     * @return int|string
     */
    public function getMessageLengthMax()
    {
        return $this->message_length_max;
    }

    /**
     * Generated from protobuf field <code>uint64 message_length_max = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMessageLengthMax($var)
    {
        GPBUtil::checkUint64($var);
        $this->message_length_max = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 group_add_member_limit = 8;</code>
     * @return int
     */
    public function getGroupAddMemberLimit()
    {
        return $this->group_add_member_limit;
    }

    /**
     * Generated from protobuf field <code>uint32 group_add_member_limit = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setGroupAddMemberLimit($var)
    {
        GPBUtil::checkUint32($var);
        $this->group_add_member_limit = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 channel_add_member_limit = 9;</code>
     * @return int
     */
    public function getChannelAddMemberLimit()
    {
        return $this->channel_add_member_limit;
    }

    /**
     * Generated from protobuf field <code>uint32 channel_add_member_limit = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setChannelAddMemberLimit($var)
    {
        GPBUtil::checkUint32($var);
        $this->channel_add_member_limit = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .proto.MicroService micro_service = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMicroService()
    {
        return $this->micro_service;
    }

    /**
     * Generated from protobuf field <code>repeated .proto.MicroService micro_service = 10;</code>
     * @param array<\Proto\MicroService>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMicroService($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Proto\MicroService::class);
        $this->micro_service = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.proto.InfoConfigResponse.Debugger debugger = 11;</code>
     * @return int
     */
    public function getDebugger()
    {
        return $this->debugger;
    }

    /**
     * Generated from protobuf field <code>.proto.InfoConfigResponse.Debugger debugger = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setDebugger($var)
    {
        GPBUtil::checkEnum($var, \Proto\InfoConfigResponse\Debugger::class);
        $this->debugger = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string base_url = 12;</code>
     * @return string
     */
    public function getBaseUrl()
    {
        return $this->base_url;
    }

    /**
     * Generated from protobuf field <code>string base_url = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setBaseUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->base_url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool show_advertising = 13;</code>
     * @return bool
     */
    public function getShowAdvertising()
    {
        return $this->show_advertising;
    }

    /**
     * Generated from protobuf field <code>bool show_advertising = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setShowAdvertising($var)
    {
        GPBUtil::checkBool($var);
        $this->show_advertising = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.proto.InfoConfigResponse.Tab defaultTab = 14;</code>
     * @return int
     */
    public function getDefaultTab()
    {
        return $this->defaultTab;
    }

    /**
     * Generated from protobuf field <code>.proto.InfoConfigResponse.Tab defaultTab = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setDefaultTab($var)
    {
        GPBUtil::checkEnum($var, \Proto\InfoConfigResponse\Tab::class);
        $this->defaultTab = $var;

        return $this;
    }

}

