<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: UserContactsBlock.proto

namespace GPBMetadata;

class UserContactsBlock
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
UserContactsBlock.protoprotoResponse.proto"E
UserContactsBlock
request (2.proto.Request
user_id ("O
UserContactsBlockResponse!
response (2.proto.Response
user_id (B(
net.iGap.protoBProtoUserContactsBlockbproto3'
        , true);

        static::$is_initialized = true;
    }
}

