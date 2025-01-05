<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: role_access_setting.proto

namespace App\Core\Grpc\GPBMetadata;

class RoleAccessSetting
{
    public static $is_initialized = false;

    public static function initOnce()
    {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
            return;
        }
        \App\Core\Grpc\GPBMetadata\Enum::initOnce();
        \App\Core\Grpc\GPBMetadata\AccessDateTime::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
role_access_setting.protoir.kalabazzar.protoaccess_date_time.proto"�
RoleAccessSetting

id (
role_id (2

user_level (2.ir.kalabazzar.proto.UserLevelC
access_setting_time (2&.ir.kalabazzar.proto.AccessSettingTimeH
access_setting_date (2&.ir.kalabazzar.proto.AccessSettingDateH �8

location_type (2!.ir.kalabazzar.proto.LocationType2

token_type (2.ir.kalabazzar.proto.TokenType4
device_type (2.ir.kalabazzar.proto.DeviceType

created_at	 (	

updated_at
 (	

deleted_at (	H�B
_access_setting_dateB
_deleted_at"�
CreateRoleAccessSettingRequest
user_id (2

user_level (2.ir.kalabazzar.proto.UserLevelC
access_setting_time (2&.ir.kalabazzar.proto.AccessSettingTimeH
access_setting_date (2&.ir.kalabazzar.proto.AccessSettingDateH �8

location_type (2!.ir.kalabazzar.proto.LocationType2

token_type (2.ir.kalabazzar.proto.TokenType4
device_type (2.ir.kalabazzar.proto.DeviceTypeB
_access_setting_date"�
UpdateRoleAccessSettingRequest

id (2

user_level (2.ir.kalabazzar.proto.UserLevelC
access_setting_time (2&.ir.kalabazzar.proto.AccessSettingTimeH
access_setting_date (2&.ir.kalabazzar.proto.AccessSettingDateH �8

location_type (2!.ir.kalabazzar.proto.LocationType2

token_type (2.ir.kalabazzar.proto.TokenType4
device_type (2.ir.kalabazzar.proto.DeviceTypeB
_access_setting_date",
DeleteRoleAccessSettingRequest

id (")
GetRoleAccessSettingRequest

id ("@
IndexRoleAccessSettingRequest
page (

	page_size (
"}
CreateRoleAccessSettingResponse
status_code (
message (	4
data (2&.ir.kalabazzar.proto.RoleAccessSetting"U
UpdateRoleAccessSettingResponse
status_code (
message (	
data ("U
DeleteRoleAccessSettingResponse
status_code (
message (	
data ("w
IndexRoleAccessSettingDataD
role_access_settings (2&.ir.kalabazzar.proto.RoleAccessSetting
total_count (
"�
IndexRoleAccessSettingsResponse
status_code (
message (	=
data (2/.ir.kalabazzar.proto.IndexRoleAccessSettingData"z
GetRoleAccessSettingResponse
status_code (
message (	4
data (2&.ir.kalabazzar.proto.RoleAccessSetting2�
RoleAccessSettingService�
CreateRoleAccessSetting3.ir.kalabazzar.proto.CreateRoleAccessSettingRequest4.ir.kalabazzar.proto.CreateRoleAccessSettingResponse�
UpdateRoleAccessSetting3.ir.kalabazzar.proto.UpdateRoleAccessSettingRequest4.ir.kalabazzar.proto.UpdateRoleAccessSettingResponse�
DeleteRoleAccessSetting3.ir.kalabazzar.proto.DeleteRoleAccessSettingRequest4.ir.kalabazzar.proto.DeleteRoleAccessSettingResponse�
IndexRoleAccessSettings2.ir.kalabazzar.proto.IndexRoleAccessSettingRequest4.ir.kalabazzar.proto.IndexRoleAccessSettingsResponse{
GetRoleAccessSetting0.ir.kalabazzar.proto.GetRoleAccessSettingRequest1.ir.kalabazzar.proto.GetRoleAccessSettingResponseBMZ4gitlab.com/saeedhpro/goutils/gen/user_access_setting�App\\Core\\Grpc\\Modelsbproto3'
            , true);

        static::$is_initialized = true;
    }
}

