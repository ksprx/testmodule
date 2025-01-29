<?php

use Proto\ChatSendMessage;
use Proto\RoomMessageType;

require_once __DIR__ . "/init.php";
require_once __DIR__ . "/app/api.php";

if( $_GET[ "actionId" ] != 30201 )
	exit( "not text" );
$data = new \Proto\ChatSendMessageResponse();
$data->mergeFromString( file_get_contents( 'php://input' ) );
$_user   = new \App\Modules\Notification\Controllers\messengers\Class\user( \App\Modules\Notification\Controllers\messengers\Class\config::MESSENGER_ID[ "igap" ] , $data->getRoomId() );
$is_user = $_user->check_user_exist();
if( ! $is_user && @$_GET[ "actionId" ] == 30201 ) {
	$token = $_user->token();
	
	$message = new ChatSendMessage();
	
	// تنظیم مقادیر پیام
	$message->setRoomId( $data->getRoomId() ); // شناسه اتاق مورد نظر
	$message->setMessage( 'برای استفاده از کالا بازار در پیام رسان ای گپ ، ابتدا حساب خود را با استفاده از دکمه زیر به کالا بازار متصل کنید.
	' ); // متن پیام
	$message->setMessageType( RoomMessageType::TEXT );
	$message->setAdditionalType( 2 );
	$additionalData = [
		[
			[
				'actionType' => 4 ,
				'label'      => '✅ فعال سازی' ,
				'value'      => "https://kalabazar.com/api/messengers/active.php?token=" . $token ,
				'imageUrl'   => '' ,
			] ,
		] ,
	];
	$message->setAdditionalData( json_encode( $additionalData ) );
	$data = $message->serializeToString();
	$igap->request( 201 , $data );
}
else {
	$message = new ChatSendMessage();
	// تنظیم مقادیر پیام
	$message->setRoomId( $data->getRoomId() ); // شناسه اتاق مورد نظر
	$message->setMessage( $data->getRoomMessage()->getMessage() ); //
	$message->setMessageType( RoomMessageType::TEXT );
	$data = $message->serializeToString();
	$igap->request( 201 , $data );
}