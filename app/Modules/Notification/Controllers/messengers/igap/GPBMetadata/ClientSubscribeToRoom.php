<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ClientSubscribeToRoom.proto

namespace GPBMetadata;

class ClientSubscribeToRoom
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
ClientSubscribeToRoom.protoprotoResponse.proto"I
ClientSubscribeToRoom
request (2.proto.Request
room_id ("B
ClientSubscribeToRoomResponse!
response (2.proto.ResponseB,
net.iGap.protoBProtoClientSubscribeToRoombproto3'
        , true);

        static::$is_initialized = true;
    }
}

