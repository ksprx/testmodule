<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: UserProfileSetNationalCode.proto

namespace GPBMetadata;

class UserProfileSetNationalCode
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
 UserProfileSetNationalCode.protoprotoResponse.proto"T
UserProfileSetNationalCode
request (2.proto.Request
national_code (	"^
"UserProfileSetNationalCodeResponse!
response (2.proto.Response
national_code (	B1
net.iGap.protoBProtoUserProfileSetNationalCodebproto3'
        , true);

        static::$is_initialized = true;
    }
}

