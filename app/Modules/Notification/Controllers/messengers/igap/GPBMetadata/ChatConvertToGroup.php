<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ChatConvertToGroup.proto

namespace GPBMetadata;

class ChatConvertToGroup
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
ChatConvertToGroup.protoprotoResponse.protoGlobal.proto"i
ChatConvertToGroup
request (2.proto.Request
room_id (
name (	
description (	"�
ChatConvertToGroupResponse!
response (2.proto.Response
room_id (
name (	
description (	#
role (2.proto.GroupRoom.RoleB)
net.iGap.protoBProtoChatConvertToGroupbproto3'
        , true);

        static::$is_initialized = true;
    }
}

