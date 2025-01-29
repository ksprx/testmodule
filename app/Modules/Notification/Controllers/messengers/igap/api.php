<?php

namespace App\Modules\Notification\Controllers\messengers\igap;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class api {
	
	private $token = "";
	
	public function __construct( $token ) {
		$this->token = $token;
	}
	
	public function request( $action , $data ) {
		$client = new Client();
		try {
			$request = $client->post( "https://api.igap.net/botland/v1/api?actionId=$action" , [
				"body"    => $data ,
				"headers" => [
					'Content-Type'  => 'application/octet-stream' ,
					'Authorization' => 'Bearer ' . $this->token ,
				] ,
			] );
			
			return $request->getBody()->getContents();
		} catch ( ClientException $e ) {
			return $e->getMessage() . " api.php" . $e->getResponse()->getBody()->getContents();
		}
	}
	
	public function getData() {
		return 1;
	}
	
}