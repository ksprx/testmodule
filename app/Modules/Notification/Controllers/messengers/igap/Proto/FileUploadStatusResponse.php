<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: FileUploadStatus.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.FileUploadStatusResponse</code>
 */
class FileUploadStatusResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Response response = 1;</code>
     */
    protected $response = null;
    /**
     * Generated from protobuf field <code>.proto.FileUploadStatusResponse.Status status = 2;</code>
     */
    protected $status = 0;
    /**
     * Generated from protobuf field <code>double progress = 3;</code>
     */
    protected $progress = 0.0;
    /**
     * Generated from protobuf field <code>uint32 recheck_delay_ms = 4;</code>
     */
    protected $recheck_delay_ms = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Proto\Response $response
     *     @type int $status
     *     @type float $progress
     *     @type int $recheck_delay_ms
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\FileUploadStatus::initOnce();
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
     * Generated from protobuf field <code>.proto.FileUploadStatusResponse.Status status = 2;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.proto.FileUploadStatusResponse.Status status = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Proto\FileUploadStatusResponse\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double progress = 3;</code>
     * @return float
     */
    public function getProgress()
    {
        return $this->progress;
    }

    /**
     * Generated from protobuf field <code>double progress = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setProgress($var)
    {
        GPBUtil::checkDouble($var);
        $this->progress = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 recheck_delay_ms = 4;</code>
     * @return int
     */
    public function getRecheckDelayMs()
    {
        return $this->recheck_delay_ms;
    }

    /**
     * Generated from protobuf field <code>uint32 recheck_delay_ms = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setRecheckDelayMs($var)
    {
        GPBUtil::checkUint32($var);
        $this->recheck_delay_ms = $var;

        return $this;
    }

}

