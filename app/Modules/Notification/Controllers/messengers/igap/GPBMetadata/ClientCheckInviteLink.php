<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ClientCheckInviteLink.proto

namespace GPBMetadata;

class ClientCheckInviteLink
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
ClientCheckInviteLink.protoprotoResponse.protoGlobal.proto"N
ClientCheckInviteLink
request (2.proto.Request
invite_token (	"]
ClientCheckInviteLinkResponse!
response (2.proto.Response
room (2.proto.RoomB,
net.iGap.protoBProtoClientCheckInviteLinkbproto3'
        , true);

        static::$is_initialized = true;
    }
}

