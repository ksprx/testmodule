<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: GroupAvatarAdd.proto

namespace GPBMetadata;

class GroupAvatarAdd
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
GroupAvatarAdd.protoprotoResponse.protoGlobal.proto"V
GroupAvatarAdd
request (2.proto.Request

attachment (	
room_id ("k
GroupAvatarAddResponse!
response (2.proto.Response
avatar (2.proto.Avatar
room_id (B%
net.iGap.protoBProtoGroupAvatarAddbproto3'
        , true);

        static::$is_initialized = true;
    }
}

