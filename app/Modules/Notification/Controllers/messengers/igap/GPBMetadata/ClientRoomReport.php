<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ClientRoomReport.proto

namespace GPBMetadata;

class ClientRoomReport
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
ClientRoomReport.protoprotoResponse.proto"�
ClientRoomReport
request (2.proto.Request
room_id (

message_id (.
reason (2.proto.ClientRoomReport.Reason
description (	
document_id ("G
Reason	
OTHER 
SPAM
PORNOGRAPHY
VIOLENCE	
ABUSE"=
ClientRoomReportResponse!
response (2.proto.ResponseB\'
net.iGap.protoBProtoClientRoomReportbproto3'
        , true);

        static::$is_initialized = true;
    }
}

