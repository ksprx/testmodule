<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: UserSessionGetActiveList.proto

namespace GPBMetadata;

class UserSessionGetActiveList
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
�
UserSessionGetActiveList.protoprotoResponse.protoGlobal.proto";
UserSessionGetActiveList
request (2.proto.Request"�
 UserSessionGetActiveListResponse!
response (2.proto.Response@
session (2/.proto.UserSessionGetActiveListResponse.Session�
Session

session_id (
app_name (	
app_id (
app_build_version (
app_version (	!
platform (2.proto.Platform
platform_version (	
device (2.proto.Device
device_name	 (	!
language
 (2.proto.Language
country (	
current (
create_time (
active_time (

ip (	B/
net.iGap.protoBProtoUserSessionGetActiveListbproto3'
        , true);

        static::$is_initialized = true;
    }
}

