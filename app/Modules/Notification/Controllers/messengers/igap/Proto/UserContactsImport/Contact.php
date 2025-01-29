<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: UserContactsImport.proto

namespace Proto\UserContactsImport;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.UserContactsImport.Contact</code>
 */
class Contact extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string phone = 1;</code>
     */
    protected $phone = '';
    /**
     * Generated from protobuf field <code>string first_name = 2;</code>
     */
    protected $first_name = '';
    /**
     * Generated from protobuf field <code>string last_name = 3;</code>
     */
    protected $last_name = '';
    /**
     * Generated from protobuf field <code>string client_id = 4;</code>
     */
    protected $client_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $phone
     *     @type string $first_name
     *     @type string $last_name
     *     @type string $client_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\UserContactsImport::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string phone = 1;</code>
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Generated from protobuf field <code>string phone = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPhone($var)
    {
        GPBUtil::checkString($var, True);
        $this->phone = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string first_name = 2;</code>
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Generated from protobuf field <code>string first_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFirstName($var)
    {
        GPBUtil::checkString($var, True);
        $this->first_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string last_name = 3;</code>
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Generated from protobuf field <code>string last_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setLastName($var)
    {
        GPBUtil::checkString($var, True);
        $this->last_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string client_id = 4;</code>
     * @return string
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * Generated from protobuf field <code>string client_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setClientId($var)
    {
        GPBUtil::checkString($var, True);
        $this->client_id = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Contact::class, \Proto\UserContactsImport_Contact::class);

