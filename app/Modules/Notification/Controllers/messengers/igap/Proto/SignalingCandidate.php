<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: SignalingCandidate.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.SignalingCandidate</code>
 */
class SignalingCandidate extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Request request = 1;</code>
     */
    protected $request = null;
    /**
     * Generated from protobuf field <code>string candidate = 2;</code>
     */
    protected $candidate = '';
    /**
     * Generated from protobuf field <code>string sdp_m_id = 3;</code>
     */
    protected $sdp_m_id = '';
    /**
     * Generated from protobuf field <code>uint32 sdp_m_line_index = 4;</code>
     */
    protected $sdp_m_line_index = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Proto\Request $request
     *     @type string $candidate
     *     @type string $sdp_m_id
     *     @type int $sdp_m_line_index
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\SignalingCandidate::initOnce();
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
     * Generated from protobuf field <code>string candidate = 2;</code>
     * @return string
     */
    public function getCandidate()
    {
        return $this->candidate;
    }

    /**
     * Generated from protobuf field <code>string candidate = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCandidate($var)
    {
        GPBUtil::checkString($var, True);
        $this->candidate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string sdp_m_id = 3;</code>
     * @return string
     */
    public function getSdpMId()
    {
        return $this->sdp_m_id;
    }

    /**
     * Generated from protobuf field <code>string sdp_m_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSdpMId($var)
    {
        GPBUtil::checkString($var, True);
        $this->sdp_m_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 sdp_m_line_index = 4;</code>
     * @return int
     */
    public function getSdpMLineIndex()
    {
        return $this->sdp_m_line_index;
    }

    /**
     * Generated from protobuf field <code>uint32 sdp_m_line_index = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setSdpMLineIndex($var)
    {
        GPBUtil::checkUint32($var);
        $this->sdp_m_line_index = $var;

        return $this;
    }

}

