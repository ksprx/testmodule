<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: UserProfileUpdateUsername.proto

namespace GPBMetadata;

class UserProfileUpdateUsername
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Request::initOnce();
        \GPBMetadata\Response::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
UserProfileUpdateUsername.protoprotoResponse.proto"N
UserProfileUpdateUsername
request (2.proto.Request
username (	"X
!UserProfileUpdateUsernameResponse!
response (2.proto.Response
username (	B0
net.iGap.protoBProtoUserProfileUpdateUsernamebproto3'
        , true);

        static::$is_initialized = true;
    }
}

