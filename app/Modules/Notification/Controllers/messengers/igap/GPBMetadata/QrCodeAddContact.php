<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: QrCodeAddContact.proto

namespace GPBMetadata;

class QrCodeAddContact
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
QrCodeAddContact.protoprotoResponse.proto"i
QrCodeAddContact
request (2.proto.Request
phone (	

first_name (	
	last_name (	"T
QrCodeAddContactResponse!
response (2.proto.Response
qr_code_image (B\'
net.iGap.protoBProtoQrCodeAddContactbproto3'
        , true);

        static::$is_initialized = true;
    }
}

