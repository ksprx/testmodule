<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: UserTwoStepVerificationResendVerifyEmail.proto

namespace GPBMetadata;

class UserTwoStepVerificationResendVerifyEmail
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
.UserTwoStepVerificationResendVerifyEmail.protoprotoResponse.proto"K
(UserTwoStepVerificationResendVerifyEmail
request (2.proto.Request"x
0UserTwoStepVerificationResendVerifyEmailResponse!
response (2.proto.Response!
unconfirmed_email_pattern (	B?
net.iGap.protoB-ProtoUserTwoStepVerificationResendVerifyEmailbproto3'
        , true);

        static::$is_initialized = true;
    }
}

