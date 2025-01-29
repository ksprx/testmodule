<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: UserTwoStepVerificationSetPassword.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.UserTwoStepVerificationSetPasswordResponse</code>
 */
class UserTwoStepVerificationSetPasswordResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Response response = 1;</code>
     */
    protected $response = null;
    /**
     * Generated from protobuf field <code>string unconfirmed_email_pattern = 2;</code>
     */
    protected $unconfirmed_email_pattern = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Proto\Response $response
     *     @type string $unconfirmed_email_pattern
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\UserTwoStepVerificationSetPassword::initOnce();
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
     * Generated from protobuf field <code>string unconfirmed_email_pattern = 2;</code>
     * @return string
     */
    public function getUnconfirmedEmailPattern()
    {
        return $this->unconfirmed_email_pattern;
    }

    /**
     * Generated from protobuf field <code>string unconfirmed_email_pattern = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUnconfirmedEmailPattern($var)
    {
        GPBUtil::checkString($var, True);
        $this->unconfirmed_email_pattern = $var;

        return $this;
    }

}

