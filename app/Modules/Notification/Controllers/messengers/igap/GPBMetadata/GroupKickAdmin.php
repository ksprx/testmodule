<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: GroupKickAdmin.proto

namespace GPBMetadata;

class GroupKickAdmin
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Request::initOnce();
        \GPBMetadata\Response::initOnce();
        \GPBMetadata\GroupChangeMemberRights::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
GroupKickAdmin.protoprotoResponse.protoGroupChangeMemberRights.proto"U
GroupKickAdmin
request (2.proto.Request
room_id (
	member_id ("�
GroupKickAdminResponse!
response (2.proto.Response
room_id (
	member_id (?

permission (2+.proto.GroupChangeMemberRights.MemberRightsB%
net.iGap.protoBProtoGroupKickAdminbproto3'
        , true);

        static::$is_initialized = true;
    }
}

