<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: PushLoginToken.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.PushLoginTokenResponse</code>
 */
class PushLoginTokenResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Response response = 1;</code>
     */
    protected $response = null;
    /**
     * Generated from protobuf field <code>string username = 2;</code>
     */
    protected $username = '';
    /**
     * Generated from protobuf field <code>uint64 user_id = 3;</code>
     */
    protected $user_id = 0;
    /**
     * Generated from protobuf field <code>string author_hash = 4;</code>
     */
    protected $author_hash = '';
    /**
     * Generated from protobuf field <code>string token = 5;</code>
     */
    protected $token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Proto\Response $response
     *     @type string $username
     *     @type int|string $user_id
     *     @type string $author_hash
     *     @type string $token
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PushLoginToken::initOnce();
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
     * Generated from protobuf field <code>string username = 2;</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Generated from protobuf field <code>string username = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUsername($var)
    {
        GPBUtil::checkString($var, True);
        $this->username = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 user_id = 3;</code>
     * @return int|string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Generated from protobuf field <code>uint64 user_id = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkUint64($var);
        $this->user_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string author_hash = 4;</code>
     * @return string
     */
    public function getAuthorHash()
    {
        return $this->author_hash;
    }

    /**
     * Generated from protobuf field <code>string author_hash = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setAuthorHash($var)
    {
        GPBUtil::checkString($var, True);
        $this->author_hash = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string token = 5;</code>
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Generated from protobuf field <code>string token = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->token = $var;

        return $this;
    }

}

