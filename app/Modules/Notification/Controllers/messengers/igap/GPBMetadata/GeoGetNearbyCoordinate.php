<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: GeoGetNearbyCoordinate.proto

namespace GPBMetadata;

class GeoGetNearbyCoordinate
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
�
GeoGetNearbyCoordinate.protoprotoResponse.proto"S
GeoGetNearbyCoordinate
request (2.proto.Request
lat (
lon ("�
GeoGetNearbyCoordinateResponse!
response (2.proto.Response<
result (2,.proto.GeoGetNearbyCoordinateResponse.ResultH
Result
user_id (
has_comment (
lat (
lon (B-
net.iGap.protoBProtoGeoGetNearbyCoordinatebproto3'
        , true);

        static::$is_initialized = true;
    }
}

