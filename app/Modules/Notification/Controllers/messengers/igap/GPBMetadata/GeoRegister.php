<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: GeoRegister.proto

namespace GPBMetadata;

class GeoRegister
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
GeoRegister.protoprotoResponse.proto">
GeoRegister
request (2.proto.Request
enable ("H
GeoRegisterResponse!
response (2.proto.Response
enable (B"
net.iGap.protoBProtoGeoRegisterbproto3'
        , true);

        static::$is_initialized = true;
    }
}

