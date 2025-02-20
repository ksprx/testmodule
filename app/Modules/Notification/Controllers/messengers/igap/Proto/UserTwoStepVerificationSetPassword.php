<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: UserTwoStepVerificationSetPassword.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.UserTwoStepVerificationSetPassword</code>
 */
class UserTwoStepVerificationSetPassword extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Request request = 1;</code>
     */
    protected $request = null;
    /**
     * Generated from protobuf field <code>string old_password = 2;</code>
     */
    protected $old_password = '';
    /**
     * Generated from protobuf field <code>string new_password = 3;</code>
     */
    protected $new_password = '';
    /**
     * Generated from protobuf field <code>string recovery_email = 4;</code>
     */
    protected $recovery_email = '';
    /**
     * Generated from protobuf field <code>string question_one = 5;</code>
     */
    protected $question_one = '';
    /**
     * Generated from protobuf field <code>string answer_one = 6;</code>
     */
    protected $answer_one = '';
    /**
     * Generated from protobuf field <code>string question_two = 7;</code>
     */
    protected $question_two = '';
    /**
     * Generated from protobuf field <code>string answer_two = 8;</code>
     */
    protected $answer_two = '';
    /**
     * Generated from protobuf field <code>string hint = 9;</code>
     */
    protected $hint = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Proto\Request $request
     *     @type string $old_password
     *     @type string $new_password
     *     @type string $recovery_email
     *     @type string $question_one
     *     @type string $answer_one
     *     @type string $question_two
     *     @type string $answer_two
     *     @type string $hint
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\UserTwoStepVerificationSetPassword::initOnce();
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
     * Generated from protobuf field <code>string old_password = 2;</code>
     * @return string
     */
    public function getOldPassword()
    {
        return $this->old_password;
    }

    /**
     * Generated from protobuf field <code>string old_password = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setOldPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->old_password = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string new_password = 3;</code>
     * @return string
     */
    public function getNewPassword()
    {
        return $this->new_password;
    }

    /**
     * Generated from protobuf field <code>string new_password = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNewPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->new_password = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string recovery_email = 4;</code>
     * @return string
     */
    public function getRecoveryEmail()
    {
        return $this->recovery_email;
    }

    /**
     * Generated from protobuf field <code>string recovery_email = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setRecoveryEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->recovery_email = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string question_one = 5;</code>
     * @return string
     */
    public function getQuestionOne()
    {
        return $this->question_one;
    }

    /**
     * Generated from protobuf field <code>string question_one = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setQuestionOne($var)
    {
        GPBUtil::checkString($var, True);
        $this->question_one = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string answer_one = 6;</code>
     * @return string
     */
    public function getAnswerOne()
    {
        return $this->answer_one;
    }

    /**
     * Generated from protobuf field <code>string answer_one = 6;</code>
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
     * Generated from protobuf field <code>string question_two = 7;</code>
     * @return string
     */
    public function getQuestionTwo()
    {
        return $this->question_two;
    }

    /**
     * Generated from protobuf field <code>string question_two = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setQuestionTwo($var)
    {
        GPBUtil::checkString($var, True);
        $this->question_two = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string answer_two = 8;</code>
     * @return string
     */
    public function getAnswerTwo()
    {
        return $this->answer_two;
    }

    /**
     * Generated from protobuf field <code>string answer_two = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setAnswerTwo($var)
    {
        GPBUtil::checkString($var, True);
        $this->answer_two = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string hint = 9;</code>
     * @return string
     */
    public function getHint()
    {
        return $this->hint;
    }

    /**
     * Generated from protobuf field <code>string hint = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setHint($var)
    {
        GPBUtil::checkString($var, True);
        $this->hint = $var;

        return $this;
    }

}

