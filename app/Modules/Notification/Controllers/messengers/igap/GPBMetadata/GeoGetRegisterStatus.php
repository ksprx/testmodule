<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: GeoGetRegisterStatus.proto

namespace GPBMetadata;

class GeoGetRegisterStatus
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
GeoGetRegisterStatus.protoprotoResponse.proto"7
GeoGetRegisterStatus
request (2.proto.Request"Q
GeoGetRegisterStatusResponse!
response (2.proto.Response
enable (B+
net.iGap.protoBProtoGeoGetRegisterStatusbproto3'
        , true);

        static::$is_initialized = true;
    }
}

