<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ClientResolveUsername.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.ClientResolveUsernameResponse</code>
 */
class ClientResolveUsernameResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Response response = 1;</code>
     */
    protected $response = null;
    /**
     * Generated from protobuf field <code>.proto.ClientResolveUsernameResponse.Type type = 2;</code>
     */
    protected $type = 0;
    /**
     * Generated from protobuf field <code>.proto.RegisteredUser user = 3;</code>
     */
    protected $user = null;
    /**
     * Generated from protobuf field <code>.proto.Room room = 4;</code>
     */
    protected $room = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Proto\Response $response
     *     @type int $type
     *     @type \Proto\RegisteredUser $user
     *     @type \Proto\Room $room
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\ClientResolveUsername::initOnce();
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
     * Generated from protobuf field <code>.proto.ClientResolveUsernameResponse.Type type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.proto.ClientResolveUsernameResponse.Type type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Proto\ClientResolveUsernameResponse\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.proto.RegisteredUser user = 3;</code>
     * @return \Proto\RegisteredUser|null
     */
    public function getUser()
    {
        return $this->user;
    }

    public function hasUser()
    {
        return isset($this->user);
    }

    public function clearUser()
    {
        unset($this->user);
    }

    /**
     * Generated from protobuf field <code>.proto.RegisteredUser user = 3;</code>
     * @param \Proto\RegisteredUser $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkMessage($var, \Proto\RegisteredUser::class);
        $this->user = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.proto.Room room = 4;</code>
     * @return \Proto\Room|null
     */
    public function getRoom()
    {
        return $this->room;
    }

    public function hasRoom()
    {
        return isset($this->room);
    }

    public function clearRoom()
    {
        unset($this->room);
    }

    /**
     * Generated from protobuf field <code>.proto.Room room = 4;</code>
     * @param \Proto\Room $var
     * @return $this
     */
    public function setRoom($var)
    {
        GPBUtil::checkMessage($var, \Proto\Room::class);
        $this->room = $var;

        return $this;
    }

}

