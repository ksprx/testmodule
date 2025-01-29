<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: UserLogin.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.UserLoginResponse</code>
 */
class UserLoginResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Response response = 1;</code>
     */
    protected $response = null;
    /**
     * Generated from protobuf field <code>bool deprecated_client = 2;</code>
     */
    protected $deprecated_client = false;
    /**
     * Generated from protobuf field <code>string secondary_node_name = 3;</code>
     */
    protected $secondary_node_name = '';
    /**
     * Generated from protobuf field <code>bool update_available = 4;</code>
     */
    protected $update_available = false;
    /**
     * Generated from protobuf field <code>uint32 chat_delete_message_for_both_period = 5;</code>
     */
    protected $chat_delete_message_for_both_period = 0;
    /**
     * Generated from protobuf field <code>bool wallet_active = 6;</code>
     */
    protected $wallet_active = false;
    /**
     * Generated from protobuf field <code>bool mpl_active = 7;</code>
     */
    protected $mpl_active = false;
    /**
     * Generated from protobuf field <code>bool wallet_agreement_accepted = 8;</code>
     */
    protected $wallet_agreement_accepted = false;
    /**
     * Generated from protobuf field <code>string access_token = 9;</code>
     */
    protected $access_token = '';
    /**
     * Generated from protobuf field <code>string contact_hash = 10;</code>
     */
    protected $contact_hash = '';
    /**
     * Generated from protobuf field <code>int32 role = 11;</code>
     */
    protected $role = 0;
    /**
     * Generated from protobuf field <code>bool need_fcm_token = 12;</code>
     */
    protected $need_fcm_token = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Proto\Response $response
     *     @type bool $deprecated_client
     *     @type string $secondary_node_name
     *     @type bool $update_available
     *     @type int $chat_delete_message_for_both_period
     *     @type bool $wallet_active
     *     @type bool $mpl_active
     *     @type bool $wallet_agreement_accepted
     *     @type string $access_token
     *     @type string $contact_hash
     *     @type int $role
     *     @type bool $need_fcm_token
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\UserLogin::initOnce();
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
     * Generated from protobuf field <code>bool deprecated_client = 2;</code>
     * @return bool
     */
    public function getDeprecatedClient()
    {
        return $this->deprecated_client;
    }

    /**
     * Generated from protobuf field <code>bool deprecated_client = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setDeprecatedClient($var)
    {
        GPBUtil::checkBool($var);
        $this->deprecated_client = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string secondary_node_name = 3;</code>
     * @return string
     */
    public function getSecondaryNodeName()
    {
        return $this->secondary_node_name;
    }

    /**
     * Generated from protobuf field <code>string secondary_node_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSecondaryNodeName($var)
    {
        GPBUtil::checkString($var, True);
        $this->secondary_node_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool update_available = 4;</code>
     * @return bool
     */
    public function getUpdateAvailable()
    {
        return $this->update_available;
    }

    /**
     * Generated from protobuf field <code>bool update_available = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setUpdateAvailable($var)
    {
        GPBUtil::checkBool($var);
        $this->update_available = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 chat_delete_message_for_both_period = 5;</code>
     * @return int
     */
    public function getChatDeleteMessageForBothPeriod()
    {
        return $this->chat_delete_message_for_both_period;
    }

    /**
     * Generated from protobuf field <code>uint32 chat_delete_message_for_both_period = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setChatDeleteMessageForBothPeriod($var)
    {
        GPBUtil::checkUint32($var);
        $this->chat_delete_message_for_both_period = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool wallet_active = 6;</code>
     * @return bool
     */
    public function getWalletActive()
    {
        return $this->wallet_active;
    }

    /**
     * Generated from protobuf field <code>bool wallet_active = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setWalletActive($var)
    {
        GPBUtil::checkBool($var);
        $this->wallet_active = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool mpl_active = 7;</code>
     * @return bool
     */
    public function getMplActive()
    {
        return $this->mpl_active;
    }

    /**
     * Generated from protobuf field <code>bool mpl_active = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setMplActive($var)
    {
        GPBUtil::checkBool($var);
        $this->mpl_active = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool wallet_agreement_accepted = 8;</code>
     * @return bool
     */
    public function getWalletAgreementAccepted()
    {
        return $this->wallet_agreement_accepted;
    }

    /**
     * Generated from protobuf field <code>bool wallet_agreement_accepted = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setWalletAgreementAccepted($var)
    {
        GPBUtil::checkBool($var);
        $this->wallet_agreement_accepted = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string access_token = 9;</code>
     * @return string
     */
    public function getAccessToken()
    {
        return $this->access_token;
    }

    /**
     * Generated from protobuf field <code>string access_token = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setAccessToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->access_token = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string contact_hash = 10;</code>
     * @return string
     */
    public function getContactHash()
    {
        return $this->contact_hash;
    }

    /**
     * Generated from protobuf field <code>string contact_hash = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setContactHash($var)
    {
        GPBUtil::checkString($var, True);
        $this->contact_hash = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 role = 11;</code>
     * @return int
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Generated from protobuf field <code>int32 role = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setRole($var)
    {
        GPBUtil::checkInt32($var);
        $this->role = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool need_fcm_token = 12;</code>
     * @return bool
     */
    public function getNeedFcmToken()
    {
        return $this->need_fcm_token;
    }

    /**
     * Generated from protobuf field <code>bool need_fcm_token = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setNeedFcmToken($var)
    {
        GPBUtil::checkBool($var);
        $this->need_fcm_token = $var;

        return $this;
    }

}

