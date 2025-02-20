<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: BillInquiryMci.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.BillInquiryMciResponse</code>
 */
class BillInquiryMciResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Response response = 1;</code>
     */
    protected $response = null;
    /**
     * Generated from protobuf field <code>uint32 status = 2;</code>
     */
    protected $status = 0;
    /**
     * Generated from protobuf field <code>string message = 3;</code>
     */
    protected $message = '';
    /**
     * Generated from protobuf field <code>.proto.BillInquiryMciResponse.BillInfo mid_term = 4;</code>
     */
    protected $mid_term = null;
    /**
     * Generated from protobuf field <code>.proto.BillInquiryMciResponse.BillInfo last_term = 5;</code>
     */
    protected $last_term = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Proto\Response $response
     *     @type int $status
     *     @type string $message
     *     @type \Proto\BillInquiryMciResponse\BillInfo $mid_term
     *     @type \Proto\BillInquiryMciResponse\BillInfo $last_term
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\BillInquiryMci::initOnce();
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
     * Generated from protobuf field <code>uint32 status = 2;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>uint32 status = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkUint32($var);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string message = 3;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Generated from protobuf field <code>string message = 3;</code>
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
     * Generated from protobuf field <code>.proto.BillInquiryMciResponse.BillInfo mid_term = 4;</code>
     * @return \Proto\BillInquiryMciResponse\BillInfo|null
     */
    public function getMidTerm()
    {
        return $this->mid_term;
    }

    public function hasMidTerm()
    {
        return isset($this->mid_term);
    }

    public function clearMidTerm()
    {
        unset($this->mid_term);
    }

    /**
     * Generated from protobuf field <code>.proto.BillInquiryMciResponse.BillInfo mid_term = 4;</code>
     * @param \Proto\BillInquiryMciResponse\BillInfo $var
     * @return $this
     */
    public function setMidTerm($var)
    {
        GPBUtil::checkMessage($var, \Proto\BillInquiryMciResponse\BillInfo::class);
        $this->mid_term = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.proto.BillInquiryMciResponse.BillInfo last_term = 5;</code>
     * @return \Proto\BillInquiryMciResponse\BillInfo|null
     */
    public function getLastTerm()
    {
        return $this->last_term;
    }

    public function hasLastTerm()
    {
        return isset($this->last_term);
    }

    public function clearLastTerm()
    {
        unset($this->last_term);
    }

    /**
     * Generated from protobuf field <code>.proto.BillInquiryMciResponse.BillInfo last_term = 5;</code>
     * @param \Proto\BillInquiryMciResponse\BillInfo $var
     * @return $this
     */
    public function setLastTerm($var)
    {
        GPBUtil::checkMessage($var, \Proto\BillInquiryMciResponse\BillInfo::class);
        $this->last_term = $var;

        return $this;
    }

}

