<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ChatGetDraft.proto

namespace GPBMetadata;

class ChatGetDraft
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
ChatGetDraft.protoprotoResponse.protoGlobal.proto"@
ChatGetDraft
request (2.proto.Request
room_id ("Z
ChatGetDraftResponse!
response (2.proto.Response
draft (2.proto.RoomDraftB#
net.iGap.protoBProtoChatGetDraftbproto3'
        , true);

        static::$is_initialized = true;
    }
}

