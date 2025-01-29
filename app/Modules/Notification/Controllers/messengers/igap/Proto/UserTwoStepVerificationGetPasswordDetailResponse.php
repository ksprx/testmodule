<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: UserTwoStepVerificationGetPasswordDetail.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.UserTwoStepVerificationGetPasswordDetailResponse</code>
 */
class UserTwoStepVerificationGetPasswordDetailResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Response response = 1;</code>
     */
    protected $response = null;
    /**
     * Generated from protobuf field <code>string question_one = 2;</code>
     */
    protected $question_one = '';
    /**
     * Generated from protobuf field <code>string question_two = 3;</code>
     */
    protected $question_two = '';
    /**
     * Generated from protobuf field <code>string hint = 4;</code>
     */
    protected $hint = '';
    /**
     * Generated from protobuf field <code>bool has_confirmed_recovery_email = 5;</code>
     */
    protected $has_confirmed_recovery_email = false;
    /**
     * Generated from protobuf field <code>string unconfirmed_email_pattern = 6;</code>
     */
    protected $unconfirmed_email_pattern = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Proto\Response $response
     *     @type string $question_one
     *     @type string $question_two
     *     @type string $hint
     *     @type bool $has_confirmed_recovery_email
     *     @type string $unconfirmed_email_pattern
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\UserTwoStepVerificationGetPasswordDetail::initOnce();
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
     * Generated from protobuf field <code>string question_one = 2;</code>
     * @return string
     */
    public function getQuestionOne()
    {
        return $this->question_one;
    }

    /**
     * Generated from protobuf field <code>string question_one = 2;</code>
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
     * Generated from protobuf field <code>string question_two = 3;</code>
     * @return string
     */
    public function getQuestionTwo()
    {
        return $this->question_two;
    }

    /**
     * Generated from protobuf field <code>string question_two = 3;</code>
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
     * Generated from protobuf field <code>string hint = 4;</code>
     * @return string
     */
    public function getHint()
    {
        return $this->hint;
    }

    /**
     * Generated from protobuf field <code>string hint = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setHint($var)
    {
        GPBUtil::checkString($var, True);
        $this->hint = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool has_confirmed_recovery_email = 5;</code>
     * @return bool
     */
    public function getHasConfirmedRecoveryEmail()
    {
        return $this->has_confirmed_recovery_email;
    }

    /**
     * Generated from protobuf field <code>bool has_confirmed_recovery_email = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setHasConfirmedRecoveryEmail($var)
    {
        GPBUtil::checkBool($var);
        $this->has_confirmed_recovery_email = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string unconfirmed_email_pattern = 6;</code>
     * @return string
     */
    public function getUnconfirmedEmailPattern()
    {
        return $this->unconfirmed_email_pattern;
    }

    /**
     * Generated from protobuf field <code>string unconfirmed_email_pattern = 6;</code>
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

