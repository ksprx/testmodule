<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ChannelGetDraft.proto

namespace GPBMetadata;

class ChannelGetDraft
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
ChannelGetDraft.protoprotoResponse.protoGlobal.proto"C
ChannelGetDraft
request (2.proto.Request
room_id ("]
ChannelGetDraftResponse!
response (2.proto.Response
draft (2.proto.RoomDraftB&
net.iGap.protoBProtoChannelGetDraftbproto3'
        , true);

        static::$is_initialized = true;
    }
}

