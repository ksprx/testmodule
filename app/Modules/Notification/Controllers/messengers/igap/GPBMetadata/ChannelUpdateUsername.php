<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ChannelUpdateUsername.proto

namespace GPBMetadata;

class ChannelUpdateUsername
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
ChannelUpdateUsername.protoprotoResponse.proto"[
ChannelUpdateUsername
request (2.proto.Request
username (	
room_id ("e
ChannelUpdateUsernameResponse!
response (2.proto.Response
username (	
room_id (B,
net.iGap.protoBProtoChannelUpdateUsernamebproto3'
        , true);

        static::$is_initialized = true;
    }
}

