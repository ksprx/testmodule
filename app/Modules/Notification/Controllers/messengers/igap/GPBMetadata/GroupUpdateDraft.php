<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: GroupUpdateDraft.proto

namespace GPBMetadata;

class GroupUpdateDraft
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
GroupUpdateDraft.protoprotoResponse.protoGlobal.proto"e
GroupUpdateDraft
request (2.proto.Request
room_id (
draft (2.proto.RoomDraft"o
GroupUpdateDraftResponse!
response (2.proto.Response
room_id (
draft (2.proto.RoomDraftB\'
net.iGap.protoBProtoGroupUpdateDraftbproto3'
        , true);

        static::$is_initialized = true;
    }
}

