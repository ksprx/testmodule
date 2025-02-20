<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: permission_request.proto

namespace App\Core\Grpc\GPBMetadata;

class PermissionRequest
{
    public static $is_initialized = false;

    public static function initOnce()
    {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
            return;
        }
        \App\Core\Grpc\GPBMetadata\Enum::initOnce();
        \App\Core\Grpc\GPBMetadata\Auth::initOnce();
        \App\Core\Grpc\GPBMetadata\Permission::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
permission_request.protoir.kalabazzar.proto
auth.protopermission.proto"�
PermissionRequest

id (
user_id (,
user (2.ir.kalabazzar.proto.UserH �
request_date (	

permission_id (	8

permission (2.ir.kalabazzar.proto.PermissionH�<
status (2,.ir.kalabazzar.proto.PermissionRequestStatus
change_status_at (	

created_at	 (	

updated_at
 (	

deleted_at (	H�B
_userB
_permissionB
_deleted_at"H
CreatePermissionRequestRequest
user_id (

permission_id (	"p
$ChangePermissionRequestStatusRequest

id (<
status (2,.ir.kalabazzar.proto.PermissionRequestStatus")
GetPermissionRequestRequest

id ("@
IndexPermissionRequestRequest
page (

	page_size (
"U
CreatePermissionRequestResponse
status_code (
message (	
data ("[
%ChangePermissionRequestStatusResponse
status_code (
message (	
data ("v
IndexPermissionRequestDataC
permission_requests (2&.ir.kalabazzar.proto.PermissionRequest
total_count (
"�
IndexPermissionRequestsResponse
status_code (
message (	=
data (2/.ir.kalabazzar.proto.IndexPermissionRequestData"z
GetPermissionRequestResponse
status_code (
message (	4
data (2&.ir.kalabazzar.proto.PermissionRequest2�
RoleAccessSettingService�
CreatePermissionRequest3.ir.kalabazzar.proto.CreatePermissionRequestRequest4.ir.kalabazzar.proto.CreatePermissionRequestResponse�
ChangePermissionRequestStatus9.ir.kalabazzar.proto.ChangePermissionRequestStatusRequest:.ir.kalabazzar.proto.ChangePermissionRequestStatusResponse�
GetPermissionRequestStatus0.ir.kalabazzar.proto.GetPermissionRequestRequest1.ir.kalabazzar.proto.GetPermissionRequestResponse�
IndexPermissionRequest2.ir.kalabazzar.proto.IndexPermissionRequestRequest4.ir.kalabazzar.proto.IndexPermissionRequestsResponseBLZ3gitlab.com/saeedhpro/goutils/gen/permission_request�App\\Core\\Grpc\\Modelsbproto3'
            , true);

        static::$is_initialized = true;
    }
}

