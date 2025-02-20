<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: WalletGetAccessToken.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.WalletGetAccessTokenResponse</code>
 */
class WalletGetAccessTokenResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Response response = 1;</code>
     */
    protected $response = null;
    /**
     * Generated from protobuf field <code>.proto.WalletGetAccessTokenResponse.TokenType token_type = 2;</code>
     */
    protected $token_type = 0;
    /**
     * Generated from protobuf field <code>string access_token = 3;</code>
     */
    protected $access_token = '';
    /**
     * Generated from protobuf field <code>uint32 expires_in = 4;</code>
     */
    protected $expires_in = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Proto\Response $response
     *     @type int $token_type
     *     @type string $access_token
     *     @type int $expires_in
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\WalletGetAccessToken::initOnce();
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
     * Generated from protobuf field <code>.proto.WalletGetAccessTokenResponse.TokenType token_type = 2;</code>
     * @return int
     */
    public function getTokenType()
    {
        return $this->token_type;
    }

    /**
     * Generated from protobuf field <code>.proto.WalletGetAccessTokenResponse.TokenType token_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setTokenType($var)
    {
        GPBUtil::checkEnum($var, \Proto\WalletGetAccessTokenResponse\TokenType::class);
        $this->token_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string access_token = 3;</code>
     * @return string
     */
    public function getAccessToken()
    {
        return $this->access_token;
    }

    /**
     * Generated from protobuf field <code>string access_token = 3;</code>
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
     * Generated from protobuf field <code>uint32 expires_in = 4;</code>
     * @return int
     */
    public function getExpiresIn()
    {
        return $this->expires_in;
    }

    /**
     * Generated from protobuf field <code>uint32 expires_in = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setExpiresIn($var)
    {
        GPBUtil::checkUint32($var);
        $this->expires_in = $var;

        return $this;
    }

}

