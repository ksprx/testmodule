<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: QrCodeNewDevice.proto

namespace GPBMetadata;

class QrCodeNewDevice
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Request::initOnce();
        \GPBMetadata\Response::initOnce();
        \GPBMetadata\PBGlobal::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
QrCodeNewDevice.protoprotoResponse.protoGlobal.proto"�
QrCodeNewDevice
request (2.proto.Request
app_name (	
app_id (
app_build_version (
app_version (	!
platform (2.proto.Platform
platform_version (	
device (2.proto.Device
device_name	 (	"h
QrCodeNewDeviceResponse!
response (2.proto.Response
qr_code_image (
expire_time (B&
net.iGap.protoBProtoQrCodeNewDevicebproto3'
        , true);

        static::$is_initialized = true;
    }
}

