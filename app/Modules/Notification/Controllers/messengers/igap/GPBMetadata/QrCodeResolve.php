<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: QrCodeResolve.proto

namespace GPBMetadata;

class QrCodeResolve
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
QrCodeResolve.protoprotoResponse.proto"V
QrCodeResolve
request (2.proto.Request
username (	

message_id ("Q
QrCodeResolveResponse!
response (2.proto.Response
qr_code_image (B$
net.iGap.protoBProtoQrCodeResolvebproto3'
        , true);

        static::$is_initialized = true;
    }
}

