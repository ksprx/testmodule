<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: GroupPinMessage.proto

namespace GPBMetadata;

class GroupPinMessage
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
GroupPinMessage.protoprotoResponse.protoGlobal.proto"l
GroupPinMessage
request (2.proto.Request
room_id (

message_id (
document_id ("y
GroupPinMessageResponse!
response (2.proto.Response
room_id (*
pinned_message (2.proto.RoomMessageB&
net.iGap.protoBProtoGroupPinMessagebproto3'
        , true);

        static::$is_initialized = true;
    }
}

