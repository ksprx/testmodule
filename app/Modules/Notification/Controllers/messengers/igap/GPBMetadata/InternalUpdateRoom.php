<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: InternalUpdateRoom.proto

namespace GPBMetadata;

class InternalUpdateRoom
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
InternalUpdateRoom.protoproto.updatequeue"�
InternalUpdateRoom
sender_user_id (
room_id (

class_name (	
	action_id (

request_id (	
wrapped_proto (
sender_session_id (	
expiration_time (B:
net.iGap.proto.updateQueue.coreBProtoInternalUpdateRoombproto3'
        , true);

        static::$is_initialized = true;
    }
}

