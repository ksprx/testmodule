<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ClientGetRoomMessage.proto

namespace GPBMetadata;

class ClientGetRoomMessage
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Request::initOnce();
        \GPBMetadata\Response::initOnce();
        \GPBMetadata\PBGlobal::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
ClientGetRoomMessage.protoprotoResponse.protoGlobal.proto"p
ClientGetRoomMessage
request (2.proto.Request
room_id (

message_id (

documentId ("f
ClientGetRoomMessageResponse!
response (2.proto.Response#
message (2.proto.RoomMessageB+
net.iGap.protoBProtoClientGetRoomMessagebproto3'
        , true);

        static::$is_initialized = true;
    }
}

