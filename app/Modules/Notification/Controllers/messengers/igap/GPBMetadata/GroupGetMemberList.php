<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: GroupGetMemberList.proto

namespace GPBMetadata;

class GroupGetMemberList
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
        \GPBMetadata\GroupAddAdmin::initOnce();
        \GPBMetadata\GroupChangeMemberRights::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
GroupGetMemberList.protoprotoResponse.protoGlobal.protoGroupAddAdmin.protoGroupChangeMemberRights.proto"�
GroupGetMemberList
request (2.proto.Request
room_id (9
filter_role (2$.proto.GroupGetMemberList.FilterRole%

pagination (2.proto.Pagination";

FilterRole
ALL 

MEMBER
	MODERATOR	
ADMIN"�
GroupGetMemberListResponse!
response (2.proto.Response8
member (2(.proto.GroupGetMemberListResponse.Member�
Member
userId (#
role (2.proto.GroupRoom.Role5
adminRights (2 .proto.GroupAddAdmin.AdminRightsA
memberRights (2+.proto.GroupChangeMemberRights.MemberRights\'
userInfo (2.proto.RegisteredUserB)
net.iGap.protoBProtoGroupGetMemberListbproto3'
        , true);

        static::$is_initialized = true;
    }
}

