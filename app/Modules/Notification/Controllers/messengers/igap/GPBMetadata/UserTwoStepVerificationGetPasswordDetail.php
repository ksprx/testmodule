<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: UserTwoStepVerificationGetPasswordDetail.proto

namespace GPBMetadata;

class UserTwoStepVerificationGetPasswordDetail
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
.UserTwoStepVerificationGetPasswordDetail.protoprotoResponse.proto"K
(UserTwoStepVerificationGetPasswordDetail
request (2.proto.Request"�
0UserTwoStepVerificationGetPasswordDetailResponse!
response (2.proto.Response
question_one (	
question_two (	
hint (	$
has_confirmed_recovery_email (!
unconfirmed_email_pattern (	B?
net.iGap.protoB-ProtoUserTwoStepVerificationGetPasswordDetailbproto3'
        , true);

        static::$is_initialized = true;
    }
}

