<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ClientResolveUsername.proto

namespace GPBMetadata;

class ClientResolveUsername
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
ClientResolveUsername.protoprotoResponse.protoGlobal.proto"J
ClientResolveUsername
request (2.proto.Request
username (	"�
ClientResolveUsernameResponse!
response (2.proto.Response7
type (2).proto.ClientResolveUsernameResponse.Type#
user (2.proto.RegisteredUser
room (2.proto.Room"
Type
USER 
ROOMB,
net.iGap.protoBProtoClientResolveUsernamebproto3'
        , true);

        static::$is_initialized = true;
    }
}

