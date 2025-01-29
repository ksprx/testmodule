<?php


use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class whatsappbot {
	
	public $body        = NULL;
	public $status_code = NULL;
	public $error       = NULL;
	public $client      = NULL;
	
	
	public function send( $method , $data = [] ) {
		$client       = new Client(  );
		$this->client = $client;
		$url          = "http://de.kalabazar.com:6001/v1" . "/" . $method;
		try {
			$send              = $client->post( $url , [
				'headers' => [
					'authorization' => 'ada91bacbe661fc51adfa5e9c6c5aa0d' ,
					'content-type'  => 'application/json' ,
				] ,
				"json"    => $data ,
			] );
			$this->body        = $send->getBody()->getContents();
			$this->status_code = $send->getStatusCode();
		} catch ( ClientException $e ) {
			$this->status_code = $e->getResponse()->getStatusCode();
			$this->body        = $e->getResponse()->getBody()->getContents();
		}
		$result = json_decode( $this->body );
		return $result;
	}
	
	public function haveError() {
		$body = json_decode($this->body);
		if( ! isset( $body->status ) ) {
			return "Response Error !";
		}
		elseif( $body->status === TRUE ) {
			return FALSE;
		}
		else {
			return $body->message;
		}
	}
	
}

