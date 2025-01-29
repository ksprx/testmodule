<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: InfoLocation.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.InfoLocationResponse</code>
 */
class InfoLocationResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Response response = 1;</code>
     */
    protected $response = null;
    /**
     * Generated from protobuf field <code>string iso_code = 2;</code>
     */
    protected $iso_code = '';
    /**
     * Generated from protobuf field <code>uint32 calling_code = 3;</code>
     */
    protected $calling_code = 0;
    /**
     * Generated from protobuf field <code>string name = 4;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string pattern = 5;</code>
     */
    protected $pattern = '';
    /**
     * Generated from protobuf field <code>string regex = 6;</code>
     */
    protected $regex = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Proto\Response $response
     *     @type string $iso_code
     *     @type int $calling_code
     *     @type string $name
     *     @type string $pattern
     *     @type string $regex
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\InfoLocation::initOnce();
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
     * Generated from protobuf field <code>string iso_code = 2;</code>
     * @return string
     */
    public function getIsoCode()
    {
        return $this->iso_code;
    }

    /**
     * Generated from protobuf field <code>string iso_code = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setIsoCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->iso_code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 calling_code = 3;</code>
     * @return int
     */
    public function getCallingCode()
    {
        return $this->calling_code;
    }

    /**
     * Generated from protobuf field <code>uint32 calling_code = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setCallingCode($var)
    {
        GPBUtil::checkUint32($var);
        $this->calling_code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 4;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 4;</code>
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
     * Generated from protobuf field <code>string pattern = 5;</code>
     * @return string
     */
    public function getPattern()
    {
        return $this->pattern;
    }

    /**
     * Generated from protobuf field <code>string pattern = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setPattern($var)
    {
        GPBUtil::checkString($var, True);
        $this->pattern = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string regex = 6;</code>
     * @return string
     */
    public function getRegex()
    {
        return $this->regex;
    }

    /**
     * Generated from protobuf field <code>string regex = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setRegex($var)
    {
        GPBUtil::checkString($var, True);
        $this->regex = $var;

        return $this;
    }

}

