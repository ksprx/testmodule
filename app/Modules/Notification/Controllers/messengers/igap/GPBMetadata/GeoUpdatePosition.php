<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: GeoUpdatePosition.proto

namespace GPBMetadata;

class GeoUpdatePosition
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
GeoUpdatePosition.protoprotoResponse.proto"N
GeoUpdatePosition
request (2.proto.Request
lat (
lon (">
GeoUpdatePositionResponse!
response (2.proto.ResponseB(
net.iGap.protoBProtoGeoUpdatePositionbproto3'
        , true);

        static::$is_initialized = true;
    }
}

