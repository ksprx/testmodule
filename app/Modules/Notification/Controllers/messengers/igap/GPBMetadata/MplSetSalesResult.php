<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MplSetSalesResult.proto

namespace GPBMetadata;

class MplSetSalesResult
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Request::initOnce();
        \GPBMetadata\Response::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
MplSetSalesResult.protoprotoResponse.proto"B
MplSetSalesResult
request (2.proto.Request
data (	">
MplSetSalesResultResponse!
response (2.proto.ResponseB(
net.iGap.protoBProtoMplSetSalesResultbproto3'
        , true);

        static::$is_initialized = true;
    }
}

