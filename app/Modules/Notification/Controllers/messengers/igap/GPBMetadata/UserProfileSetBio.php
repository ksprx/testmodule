<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: UserProfileSetBio.proto

namespace GPBMetadata;

class UserProfileSetBio
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
�
UserProfileSetBio.protoprotoResponse.proto"A
UserProfileSetBio
request (2.proto.Request
bio (	"K
UserProfileSetBioResponse!
response (2.proto.Response
bio (	B%
net.iGap.protoBProtoUserProfileBiobproto3'
        , true);

        static::$is_initialized = true;
    }
}

