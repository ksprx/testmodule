<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ChannelLeft.proto

namespace GPBMetadata;

class ChannelLeft
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
ChannelLeft.protoprotoResponse.proto"?
ChannelLeft
request (2.proto.Request
room_id ("\\
ChannelLeftResponse!
response (2.proto.Response
room_id (
	member_id (B"
net.iGap.protoBProtoChannelLeftbproto3'
        , true);

        static::$is_initialized = true;
    }
}

