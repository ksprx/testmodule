<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ClientJoinByUsername.proto

namespace GPBMetadata;

class ClientJoinByUsername
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
ClientJoinByUsername.protoprotoResponse.proto"I
ClientJoinByUsername
request (2.proto.Request
username (	"c
ClientJoinByUsernameResponse!
response (2.proto.Response
room_id (
user_id (B+
net.iGap.protoBProtoClientJoinByUsernamebproto3'
        , true);

        static::$is_initialized = true;
    }
}

