<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: SignalingSessionHold.proto

namespace GPBMetadata;

class SignalingSessionHold
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
�
SignalingSessionHold.protoprotoResponse.proto"E
SignalingSessionHold
request (2.proto.Request
hold ("O
SignalingSessionHoldResponse!
response (2.proto.Response
hold (B+
net.iGap.protoBProtoSignalingSessionHoldbproto3'
        , true);

        static::$is_initialized = true;
    }
}

