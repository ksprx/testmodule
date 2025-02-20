<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Global.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.Discovery</code>
 */
class Discovery extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Discovery.DiscoveryModel model = 1;</code>
     */
    protected $model = 0;
    /**
     * Generated from protobuf field <code>string scale = 2;</code>
     */
    protected $scale = '';
    /**
     * Generated from protobuf field <code>repeated .proto.DiscoveryField discoveryfields = 3;</code>
     */
    private $discoveryfields;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $model
     *     @type string $scale
     *     @type array<\Proto\DiscoveryField>|\Google\Protobuf\Internal\RepeatedField $discoveryfields
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBGlobal::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.proto.Discovery.DiscoveryModel model = 1;</code>
     * @return int
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Generated from protobuf field <code>.proto.Discovery.DiscoveryModel model = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setModel($var)
    {
        GPBUtil::checkEnum($var, \Proto\Discovery\DiscoveryModel::class);
        $this->model = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string scale = 2;</code>
     * @return string
     */
    public function getScale()
    {
        return $this->scale;
    }

    /**
     * Generated from protobuf field <code>string scale = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setScale($var)
    {
        GPBUtil::checkString($var, True);
        $this->scale = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .proto.DiscoveryField discoveryfields = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDiscoveryfields()
    {
        return $this->discoveryfields;
    }

    /**
     * Generated from protobuf field <code>repeated .proto.DiscoveryField discoveryfields = 3;</code>
     * @param array<\Proto\DiscoveryField>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDiscoveryfields($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Proto\DiscoveryField::class);
        $this->discoveryfields = $arr;

        return $this;
    }

}

