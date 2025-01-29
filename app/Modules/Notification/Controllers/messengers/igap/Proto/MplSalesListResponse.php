<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MplSalesList.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.MplSalesListResponse</code>
 */
class MplSalesListResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.Response response = 1;</code>
     */
    protected $response = null;
    /**
     * Generated from protobuf field <code>repeated .proto.MplSale sale = 2;</code>
     */
    private $sale;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Proto\Response $response
     *     @type array<\Proto\MplSale>|\Google\Protobuf\Internal\RepeatedField $sale
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\MplSalesList::initOnce();
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
     * Generated from protobuf field <code>repeated .proto.MplSale sale = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSale()
    {
        return $this->sale;
    }

    /**
     * Generated from protobuf field <code>repeated .proto.MplSale sale = 2;</code>
     * @param array<\Proto\MplSale>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSale($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Proto\MplSale::class);
        $this->sale = $arr;

        return $this;
    }

}

