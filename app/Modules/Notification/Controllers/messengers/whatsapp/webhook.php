<?php

require_once __DIR__ . "/init.php";
require_once __DIR__ . "/app/api.php";
$chat_id = @$_REQUEST[ "from" ];
$_user   = new \App\Modules\Notification\Controllers\messengers\Class\user( \App\Modules\Notification\Controllers\messengers\Class\config::MESSENGER_ID[ "whatsapp" ] , $chat_id );
$is_user = $_user->check_user_exist();
if( ! $is_user ) {
	$token = $_user->token();
	$whatsapp->send( "sendMessage" , [
		"text"  => "
		برای استفاده از کالا بازار در پیام رسان واتساپ ، ابتدا حساب خود را با استفاده از لینک زیر به کالا بازار متصل کنید.
		https://kalabazar.com/api/messengers/active.php?token={$token}
		" ,
		"phone" => $chat_id ,
	] );
}
else {
	$whatsapp->send( "sendMessage" , [
		"text"  => $_REQUEST[ "body" ] ,
		"phone" => $chat_id ,
	] );
}