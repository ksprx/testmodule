<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MplTransactionList.proto

namespace GPBMetadata;

class MplTransactionList
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
�
MplTransactionList.protoprotoResponse.protoGlobal.proto"�
MplTransactionList
request (2.proto.Request(
type (2.proto.MplTransaction.Type%

pagination (2.proto.Pagination"k
MplTransactionListResponse!
response (2.proto.Response*
transaction (2.proto.MplTransactionB)
net.iGap.protoBProtoMplTransactionListbproto3'
        , true);

        static::$is_initialized = true;
    }
}

