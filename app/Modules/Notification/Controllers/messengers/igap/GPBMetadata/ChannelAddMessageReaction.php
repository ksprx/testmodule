<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ChannelAddMessageReaction.proto

namespace GPBMetadata;

class ChannelAddMessageReaction
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
�
ChannelAddMessageReaction.protoprotoResponse.protoGlobal.proto"�
ChannelAddMessageReaction
request (2.proto.Request
room_id (

message_id (,
reaction (2.proto.RoomMessageReaction
document_id ("f
!ChannelAddMessageReactionResponse!
response (2.proto.Response
reaction_counter_label (	B0
net.iGap.protoBProtoChannelAddMessageReactionbproto3'
        , true);

        static::$is_initialized = true;
    }
}

