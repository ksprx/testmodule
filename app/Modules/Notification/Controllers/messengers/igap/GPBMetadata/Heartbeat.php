<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Heartbeat.proto

namespace GPBMetadata;

class Heartbeat
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
Heartbeat.protoprotoResponse.proto",
	Heartbeat
request (2.proto.Request"6
HeartbeatResponse!
response (2.proto.ResponseB 
net.iGap.protoBProtoHeartbeatbproto3'
        , true);

        static::$is_initialized = true;
    }
}

