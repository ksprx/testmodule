<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Global.proto

namespace GPBMetadata;

class PBGlobal
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\GroupChangeMemberRights::initOnce();
        $pool->internalAddGeneratedFile(
            '
�w
Global.protoproto"/
RoomMessageLocation
lat (
lon ("�
RoomMessageLog(
type (2.proto.RoomMessageLog.Type3

extra_type (2.proto.RoomMessageLog.ExtraType5
target_user (2 .proto.RoomMessageLog.TargetUser

TargetUser
id (B0"�
Type
USER_JOINED 
USER_DELETED
ROOM_CREATED
MEMBER_ADDED
MEMBER_KICKED
MEMBER_LEFT
ROOM_CONVERTED_TO_PUBLIC
ROOM_CONVERTED_TO_PRIVATE 
MEMBER_JOINED_BY_INVITE_LINK
ROOM_DELETED	
MISSED_VOICE_CALL

MISSED_VIDEO_CALL
MISSED_SCREEN_SHARE
MISSED_SECRET_CHAT
PINNED_MESSAGE
CHANGE_PHONE_NUMBER"*
	ExtraType
NO_EXTRA 
TARGET_USER"k
RoomMessageContact

first_name (	
	last_name (	
nickname (	
phone (	
email (	"�
RoomMessageWallet+
type (2.proto.RoomMessageWallet.Type>
money_transfer (2&.proto.RoomMessageWallet.MoneyTransfer9
card_to_card (2#.proto.RoomMessageWallet.CardToCard-
topup (2.proto.RoomMessageWallet.Topup+
bill (2.proto.RoomMessageWallet.Bill�
MoneyTransfer
from_user_id (B0

to_user_id (B0
amount (B0
trace_number (
invoice_number (
pay_time (
description (	
card_number (	
rrn	 (�

CardToCard
from_user_id (B0

to_user_id (B0
order_id (B0
token (	
amount (B0
source_card_number (	
dest_card_number (	
request_time (
rrn	 (	
trace_number
 (	
bankName (	
destBankName (	
cardOwnerName (	
status (�
Topup
from_user_id (B0
order_id (B0
my_token (	
token (B0
amount (B0
requester_mobile_number (	
charge_mobile_number (	7

topup_type (2#.proto.RoomMessageWallet.Topup.Type
card_number	 (	
merchant_name
 (	
terminal_no (B0
rrn (B0
trace_number (B0
request_time (
status (
status_description (	"o
Type
IRANCELL_PREPAID 
IRANCELL_WOW
IRANCELL_WIMAX
IRANCELL_POSTPAID
MCI
RIGHTEL�
Bill
from_user_id (B0
order_id (B0
my_token (	
token (B0
amount (B0
pay_id (	
bill_id (	
	bill_type (	
card_number	 (	
merchant_name
 (	
terminal_no (B0
rrn (B0
trace_number (B0
request_time (
status (
status_description (	"N
Type
MONEY_TRANSFER 
PAYMENT
CARD_TO_CARD	
TOPUP
BILL"^
RoomMessageForwardFrom
room_id (B0

message_id (B0
document_id (B0"�
RoomMessageStory.
status (2.proto.RoomMessageStory.Status
story (2.proto.Story";
Status

ACTIVE 
EXPIRED
PRIVATE
DELETED">
RoomMessageStoryReply
story_id (B0
caption (	"/
RoomMessageStoryForward
story_id (B0"�
Story
id (B0

file_token (	!
file_details (2.proto.File
type (2.proto.Story.Type
user_id (B0
room_id (B0
caption (	
link (	

created_at	 (
end_at
 (
seen (

duplicated (%

originator (2.proto.Originator
views ("
Type	
STORY 
LIVE"�
RegisteredUser
id (B0
username (	
phone (B0

first_name (	
	last_name (	
display_name (	
initials (	
color (	,
status	 (2.proto.RegisteredUser.Status
	last_seen
 (
avatar_count (
avatar (2.proto.Avatar
mutual (
deleted (
cache_id (	
bio (	
verified (
bot (

mxb_enable ("�
Status
LONG_TIME_AGO 

LAST_MONTH
	LAST_WEEK

ONLINE
EXACTLY
RECENTLY
SUPPORT
SERVICE_NOTIFICATIONS"3
Avatar
id (B0
file (2.proto.File"�
RoomMessage
room_id (

message_id (B0
message_version (B0(
status (2.proto.RoomMessageStatus
status_version (B0,
message_type (2.proto.RoomMessageType
message (	

attachment (2.proto.File)
author (2.proto.RoomMessage.Author,
location	 (2.proto.RoomMessageLocation"
log
 (2.proto.RoomMessageLog*
contact (2.proto.RoomMessageContact(
wallet (2.proto.RoomMessageWallet
edited (
create_time (
update_time (
deleted ((
forward_from (2.proto.RoomMessage$
reply_to (2.proto.RoomMessage&
story (2.proto.RoomMessageStory
previous_message_id (B0
	random_id (B0
additional_type (
additional_data (	0

extra_type (2.proto.RoomMessage.ExtraType6
channel_extra (2.proto.RoomMessage.ChannelExtra
document_id (
version_document_id (2
group_extra (2.proto.RoomMessage.GroupExtra*
sticker (2.proto.RoomMessageSticker2
card_to_card (2.proto.RoomMessageCardToCard9
bot_action_lists  (2.proto.RoomMessageBotActionList$

text_signs! (2.proto.TextSigns�
Author
hash (	,
user (2.proto.RoomMessage.Author.User,
room (2.proto.RoomMessage.Author.Room-
User
user_id (B0
cache_id (	
Room
room_id (B0j
ChannelExtra
	signature (	
views_label (	
thumbs_up_label (	
thumbs_down_label (	.

GroupExtra 
mentions (2.proto.Mention",
	ExtraType
NO_EXTRA 
CHANNEL_EXTRA"F
	RoomDraft
message (	
reply_to (B0

draft_time ("�
Room
id (B0
type (2.proto.Room.Type
title (	
initials (	
color (	
unread_count ((
last_message (2.proto.RoomMessage
	read_only (
is_participant	 (
draft
 (2.proto.RoomDraft0
first_unread_message (2.proto.RoomMessage"
	room_mute (2.proto.RoomMute
pin_id (B0*
pinned_message (2.proto.RoomMessage
priority ((
chat_room_extra (2.proto.ChatRoom*
group_room_extra (2.proto.GroupRoom.
channel_room_extra (2.proto.ChannelRoom
app_id (%

permission (2.proto.RoomAccess"(
Type
CHAT 	
GROUP
CHANNEL"P
ChatRoom#
peer (2.proto.RegisteredUser
botInfo (2.proto.BotInfo"�
	GroupRoom#
type (2.proto.GroupRoom.Type#
role (2.proto.GroupRoom.Role
participants_count ( 
participants_count_label (	 
participants_count_limit (&
participants_count_limit_label (	
description (	
avatar_count (
avatar	 (2.proto.Avatar4
private_extra
 (2.proto.GroupRoom.PrivateExtra2
public_extra (2.proto.GroupRoom.PublicExtra@
room_rights (2+.proto.GroupChangeMemberRights.MemberRights

is_mention (9
PrivateExtra
invite_link (	
invite_token (	
PublicExtra
username (	")
Type
PRIVATE_ROOM 
PUBLIC_ROOM"7
Role

MEMBER 
	MODERATOR	
ADMIN	
OWNER"�
ChannelRoom%
type (2.proto.ChannelRoom.Type%
role (2.proto.ChannelRoom.Role
participants_count ( 
participants_count_label (	
description (	
avatar_count (
avatar (2.proto.Avatar6
private_extra (2.proto.ChannelRoom.PrivateExtra4
public_extra	 (2.proto.ChannelRoom.PublicExtra
	signature
 (
seen_id (B0
verified (
reaction_status (9
PrivateExtra
invite_link (	
invite_token (	
PublicExtra
username (	")
Type
PRIVATE_ROOM 
PUBLIC_ROOM"7
Role

MEMBER 
	MODERATOR	
ADMIN	
OWNER"f
	Thumbnail
size (
width (
height (
cache_id (	
name (	
mime (	"�
File
token (	
name (	
size ()
large_thumbnail (2.proto.Thumbnail)
small_thumbnail (2.proto.Thumbnail,
waveform_thumbnail (2.proto.Thumbnail
width (
height (
duration	 (
cache_id
 (	
mime (	

public_url (	"u
PostMessageRights
	send_text (

send_media (
send_gif (
send_sticker (
	send_link ("�

RoomAccess
modify_room (.
post_message (2.proto.PostMessageRights
edit_message (
delete_message (
pin_message (

add_member (

ban_member (

get_member (
	add_admin	 (
	add_story
 (
delete_story (
show_story_views ("5
	Wallpaper
file (2.proto.File
color (	"+

Pagination
offset (
limit ("Z
Favorite
name (	
	textcolor (	
bgcolor (	
value (	
image (	"�
DiscoveryField
imageurl (	
value (	:

actiontype (2&.proto.DiscoveryField.ButtonActionType
orderid (

id (
param (	
	agreement (
refresh (
agreementSlug	 (	"�
ButtonActionType
NONE 
	JOIN_LINK

BOT_ACTION
USERNAME_LINK
WEB_LINK
WEB_VIEW_LINK
STREAM_PLAY
PAY_BY_WALLET

PAY_DIRECT
REQUEST_PHONE	
REQUEST_LOCATION


SHOW_ALERT
PAGE
FINANCIAL_MENU
	BILL_MENU
TRAFFIC_BILL_MENU
MOBILE_BILL_MENU
PHONE_BILL_MENU

TOPUP_MENU
WALLET_MENU
NEARBY_MENU
CALL
STICKER_SHOP	
IVAND
IVANDQR
	IVANDLIST

IVANDSCORE
CARD_TO_CARD
FAVORITE_CHANNEL	
MUSIC
CHARITY
FUN_SERVICE
VIRTUAL_MONEY 
CITY_SERVICE!
POLL"
INTERNET_PACKAGE_MENU#
FINANCIAL_HISTORY$
INVITE_FRIEND%
NEWS&
ELECTRIC_BILL_MENU\'

BLOCKCHAIN(
PARSLAND)
POLL_RESULT*
VIRTUAL_GIFT_CARD+
NEWS_DETAIL,	
QRPAY-"�
	Discovery.
model (2.proto.Discovery.DiscoveryModel
scale (	.
discoveryfields (2.proto.DiscoveryField"�
DiscoveryModel

MODEL1 

MODEL2

MODEL3

MODEL4

MODEL5

MODEL6

MODEL7

MODEL8

MODEL9
MODEL10	
MODEL11
"~
	PollField
imageurl (	
orderid (

id (
clicked (
sum (B0
	clickable (
label (	"x
Poll.
model (2.proto.Discovery.DiscoveryModel
scale (	
max ($

pollfields (2.proto.PollField";
IVandActivity
title (	
score (
time ("�
MplSale
invoice_number (B0
from_user_id (B0
amount (B0
trace_number (
pay_time (
description (	
card_number (	
rrn (%
status	 (2.proto.MplSale.Status"C
Status
PENDING_VERIFY 
SUCCESS

FAILED
REVERSED"�
MplTransaction
order_id (B0
token (	
pay_time ((
type (2.proto.MplTransaction.Type(
bill (2.proto.MplTransaction.Bill*
topup (2.proto.MplTransaction.Topup*
sales (2.proto.MplTransaction.Sales4

cardtocard (2 .proto.MplTransaction.CardToCard�
Bill
BillId (	
PayId (	
BillType (	
Status (
Amount (B0

CardNumber (	
MerchantName (	
OrderId (B0
RequestDateTime	 (B0
RRN
 (B0
StatusDescription (	

TerminalNo (
TraceNo (�
Topup!
RequesterMobileNumber (B0
ChargeMobileNumber (B0
	TopupType (
Status (
Amount (B0

CardNumber (	
MerchantName (	
OrderId (B0
RequestDateTime	 (B0
RRN
 (B0
StatusDescription (	

TerminalNo (
TraceNo (�
Sales
Status (
Amount (B0

CardNumber (	
MerchantName (	
OrderId (B0
RequestDateTime (B0
RRN (B0
StatusDescription (	

TerminalNo	 (
TraceNo
 (�

CardToCard
Status (
Amount (B0
SourceCardNumber (	
DestCardNumber (	
BankName (	
DestBankName (	
CardOwnerName (	
OrderId (B0
RequestDateTime	 (B0
RRN
 (B0
StatusDescription (	
TraceNo ("B
Type
NONE 
BILL	
TOPUP	
SALES
CARD_TO_CARD"�
BotInfo

id (
welcomeMessage (	)
actions (2.proto.BotInfo.BotAction\'
	BotAction
key (	
value (	"
Mention
userIds ("�
RoomMessageSticker7
type (2).proto.RoomMessageSticker.StickerTypeEnum
message (	

id (	
name (	
path (	
token (	
group_id (	
	file_name (	
	file_size	 (
gift_id
 (	
gift_amount (
is_favorite (
sort (
ref_id (
tags (	"D
StickerTypeEnum
STICKER 
GIFT_STICKER
MOTION_STICKER"�
RoomMessageCardToCard
message (	
label (	
	image_url (	
action_type (	
card_number (	
amount (
user_id ("�
RoomMessageBotAction9
action (2).proto.RoomMessageBotAction.BotActionEnum
label (	
value (	"�
BotActionEnum
NONE 
	JOIN_LINK

BOT_ACTION
USERNAME_LINK
WEB_LINK
WEBVIEW_LINK
STREAM_PLAY
PAY_BY_WALLET

PAY_DIRECT
REQUEST_PHONE	
REQUEST_LOCATION


SHOW_ALERT
PAGE
FINANCIAL_MENU
	BILL_MENU
TRAFFIC_BILL_MENU
MOBILE_BILL_MENU
PHONE_BILL_MENU

TOPUP_MENU
WALLET_MENU
NEARBY_MENU
CALL
STICKER_SHOP
IVAN

IVANQR
	IVANDLIST

IVANDSCORE
CARD_TO_CARD"H
RoomMessageBotActionList,
actions (2.proto.RoomMessageBotAction"�
	TextSigns,
	text_sign (2.proto.TextSigns.TextSign�
TextSign,
type (2.proto.TextSigns.TextSign.Type
start_index (
	end_index (
link (	
user_id ("�
Type
UNKNOWN 
IGAP_DEEP_LINK
	IGAP_LINK
WEB_LINK
BOT_COMMAND
IGAP_RESOLVE

DIGIT_LINK
MENTION
HASHTAG
BOLD	

ITALIC

	UNDERLINE

STRIKE
SPOILER	
EMAIL	
PHONE
	BANK_CARD
TEXT_URL
CODE
MENTION_NAME*+
Gender
UNKNOWN 
MALE

FEMALE*<
Device
UNKNOWN_DEVICE 
PC

TABLET

MOBILE*k
Platform
UNKNOWN_PLATFORM 
ANDROID
IOS

MAC_OS
WINDOWS	
LINUX
BLACK_BERRY* 
Language	
EN_US 	
FA_IR*�
RoomMessageType
TEXT 	
IMAGE

IMAGE_TEXT	
VIDEO

VIDEO_TEXT	
AUDIO

AUDIO_TEXT	
VOICE
GIF
GIF_TEXT
FILE	
	FILE_TEXT

LOCATION
LOG
CONTACT

WALLET
STICKER	
STORY
STORY_REPLY
CARD_TO_CARD
BOT*]
RoomMessageStatus

FAILED 
SENDING
SENT
	DELIVERED
SEEN
LISTENED*5
RoomMessageReaction
	THUMBS_UP 
THUMBS_DOWN*�

SearchType
SEARCH_ALL_TYPES 
SEARCH_IMAGE
SEARCH_VIDEO
SEARCH_AUDIO
SEARCH_FILE
SEARCH_VOICE

SEARCH_GIF
SEARCH_CONTACT
SEARCH_MEDIA* 

Originator
USER 
ROOM*�
ClientAction

CANCEL 

TYPING
SENDING_IMAGE
CAPTURING_IMAGE
SENDING_VIDEO
CAPTURING_VIDEO
SENDING_AUDIO
RECORDING_VOICE
SENDING_VOICE
SENDING_DOCUMENT	
SENDING_GIF

SENDING_FILE
SENDING_LOCATION
CHOOSING_CONTACT
PAINTING*b
RoomType
CHAT 
PRIVATE_GROUP
PUBLIC_GROUP
PRIVATE_CHANNEL
PUBLIC_CHANNEL* 
RoomMute

UNMUTE 
MUTE*�
PrivacyType
USER_STATUS 

AVATAR
GROUP_INVITE
CHANNEL_INVITE
VOICE_CALLING
VIDEO_CALLING
SCREEN_SHARING
SECRET_CHAT*?
PrivacyLevel
	ALLOW_ALL 
DENY_ALL
ALLOW_CONTACTSB
net.iGap.protoBProtoGlobalbproto3'
        , true);

        static::$is_initialized = true;
    }
}

