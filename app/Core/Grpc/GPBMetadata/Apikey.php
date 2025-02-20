<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: apikey.proto

namespace App\Core\Grpc\GPBMetadata;

class Apikey
{
    public static $is_initialized = false;

    public static function initOnce()
    {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
            return;
        }
        $pool->internalAddGeneratedFile(
            '
�
apikey.protoir.kalabazzar.proto"�
ApiKey

id (
key (	
	is_active (
user_id (

created_at (	

updated_at (	

deleted_at (	H �B
_deleted_at"F
CreateApiKeyRequest
key (	
	is_active (
user_id ("R
UpdateApiKeyRequest

id (
key (	
	is_active (
user_id ("!
DeleteApiKeyRequest

id ("
GetApiKeyRequest

id ("6
IndexApiKeysRequest
page (

	page_size (
"g
CreateApiKeyResponse
status_code (
message (	)
data (2.ir.kalabazzar.proto.ApiKey"J
UpdateApiKeyResponse
status_code (
message (	
data ("J
DeleteApiKeyResponse
status_code (
message (	
data ("U
IndexApiKeyData-
api_keys (2.ir.kalabazzar.proto.ApiKey
total_count (
"p
IndexApiKeysResponse
status_code (
message (	2
data (2$.ir.kalabazzar.proto.IndexApiKeyData"d
GetApiKeyResponse
status_code (
message (	)
data (2.ir.kalabazzar.proto.ApiKey2�

ApiKeyServicec
CreateApiKey(.ir.kalabazzar.proto.CreateApiKeyRequest).ir.kalabazzar.proto.CreateApiKeyResponsec
UpdateApiKey(.ir.kalabazzar.proto.UpdateApiKeyRequest).ir.kalabazzar.proto.UpdateApiKeyResponsec
DeleteApiKey(.ir.kalabazzar.proto.DeleteApiKeyRequest).ir.kalabazzar.proto.DeleteApiKeyResponsec
IndexApiKeys(.ir.kalabazzar.proto.IndexApiKeysRequest).ir.kalabazzar.proto.IndexApiKeysResponseZ
	GetApiKey%.ir.kalabazzar.proto.GetApiKeyRequest&.ir.kalabazzar.proto.GetApiKeyResponseB@Z\'gitlab.com/saeedhpro/goutils/gen/apikey�App\\Core\\Grpc\\Modelsbproto3'
            , true);

        static::$is_initialized = true;
    }
}

