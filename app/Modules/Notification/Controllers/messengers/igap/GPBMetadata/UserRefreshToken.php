<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: UserRefreshToken.proto

namespace GPBMetadata;

class UserRefreshToken
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
UserRefreshToken.protoprotoResponse.proto"3
UserRefreshToken
request (2.proto.Request"S
UserRefreshTokenResponse!
response (2.proto.Response
access_token (	B\'
net.iGap.protoBProtoUserRefreshTokenbproto3'
        , true);

        static::$is_initialized = true;
    }
}

