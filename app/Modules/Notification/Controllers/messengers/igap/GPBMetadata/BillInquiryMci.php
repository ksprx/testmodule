<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: BillInquiryMci.proto

namespace GPBMetadata;

class BillInquiryMci
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
BillInquiryMci.protoprotoResponse.proto"H
BillInquiryMci
request (2.proto.Request
mobile_number ("�
BillInquiryMciResponse!
response (2.proto.Response
status (
message (	8
mid_term (2&.proto.BillInquiryMciResponse.BillInfo9
	last_term (2&.proto.BillInquiryMciResponse.BillInfo\\
BillInfo
status (
bill_id (
pay_id (
amount (
message (	B%
net.iGap.protoBProtoBillInquiryMcibproto3'
        , true);

        static::$is_initialized = true;
    }
}

