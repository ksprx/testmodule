<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: UserVerify.proto

namespace GPBMetadata;

class UserVerify
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
UserVerify.protoprotoResponse.proto"a

UserVerify
request (2.proto.Request
code (
username (	

phone_hash (	"X
UserVerifyResponse!
response (2.proto.Response
token (	
new_user (B!
net.iGap.protoBProtoUserVerifybproto3'
        , true);

        static::$is_initialized = true;
    }
}

