<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: UserTwoStepVerificationRecoverPasswordByAnswers.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.UserTwoStepVerificationRecoverPasswordByAnswers</code>
 */
class UserTwoStepVerificationRecoverPasswordByAnswers extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Request request = 1;</code>
     */
    protected $request = null;
    /**
     * Generated from protobuf field <code>string answer_one = 2;</code>
     */
    protected $answer_one = '';
    /**
     * Generated from protobuf field <code>string answer_two = 3;</code>
     */
    protected $answer_two = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Proto\Request $request
     *     @type string $answer_one
     *     @type string $answer_two
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\UserTwoStepVerificationRecoverPasswordByAnswers::initOnce();
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
     * Generated from protobuf field <code>string answer_one = 2;</code>
     * @return string
     */
    public function getAnswerOne()
    {
        return $this->answer_one;
    }

    /**
     * Generated from protobuf field <code>string answer_one = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAnswerOne($var)
    {
        GPBUtil::checkString($var, True);
        $this->answer_one = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string answer_two = 3;</code>
     * @return string
     */
    public function getAnswerTwo()
    {
        return $this->answer_two;
    }

    /**
     * Generated from protobuf field <code>string answer_two = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAnswerTwo($var)
    {
        GPBUtil::checkString($var, True);
        $this->answer_two = $var;

        return $this;
    }

}

