<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MplGetTopupToken.proto

namespace GPBMetadata;

class MplGetTopupToken
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
MplGetTopupToken.protoprotoResponse.proto"�
MplGetTopupToken
request (2.proto.Request
charge_mobile_number (
amount (*
type (2.proto.MplGetTopupToken.Type"o
Type
IRANCELL_PREPAID 
IRANCELL_WOW
IRANCELL_WIMAX
IRANCELL_POSTPAID
MCI
RIGHTEL"�
MplGetTopupTokenResponse!
response (2.proto.Response
status (
token (	
expire_time (
message (	B\'
net.iGap.protoBProtoMplGetTopupTokenbproto3'
        , true);

        static::$is_initialized = true;
    }
}

