<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MxbSearch.proto

namespace GPBMetadata;

class MxbSearch
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
MxbSearch.protoprotoResponse.proto";
	MxbSearch
request (2.proto.Request
phone (	"�
MxbSearchResponse!
response (2.proto.Response,
items (2.proto.MxbSearchResponse.ItemY
Item

id (
nickname (	
avatar (	
messenger_id (
phone (	B 
net.iGap.protoBProtoMxbSearchbproto3'
        , true);

        static::$is_initialized = true;
    }
}

