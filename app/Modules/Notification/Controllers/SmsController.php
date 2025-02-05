<?php

namespace App\Modules\Notification\Controllers;

use App\Core\Exceptions\GraphqlError;
use App\Core\Facades\Logger;
use App\Http\Controllers\Controller;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ConnectException;

class SmsController extends Controller
{
    const SMS_API_KEY = "5468356365683843303942376A323759664F366C68773D3D";
    const SMS_SENDER = "10001100100011";
    const SMS_PATTERNS = [
        "loginReport"
    ];

    public function send($args)
    {
        $send = $this->baseRequest("sms/send", $args);
        if ($send->return->status == 200) {
            return [
                "status" => true,
                "message" => $send->return->message ?? "ارسال موفق"
            ];
        }
        return [
            "status" => false,
            "message" => $send->return->message ?? "خطا"
        ];
    }

    public function pattern($args)
    {
        $data = [
            'receptor' => @$args['receptor'],
            'token' => @$args['token'],
            'token2' => @$args['token2'],
            'token3' => @$args['token3'],
            'template' => $args['template'],
        ];
        $send = $this->baseRequest("verify/lookup", $data);
        if ($send->return->status == 200) {
            return [
                "status" => true,
                "message" => $send->return->message ?? "ارسال موفق"
            ];
        }
        return [
            "status" => false,
            "message" => $send->return->message ?? "خطا"
        ];
    }

    protected function baseRequest($method, $data)
    {
        $data["sender"] = self::SMS_SENDER;
        if (isset($data["message"])) $data["message"] = urlencode($data["message"]);
        $client = new Client([
            'verify' => true,
            'stream_context_options' => [
                'ssl' => [
                    'session_cache_mode' => STREAM_CRYPTO_METHOD_TLS_CLIENT,
                    'session_cache_limit' => 100,
                    'session_cache_ttl' => 3600,
                ],
            ],
            'allow_dns_cache' => true,
            'dns_cache_ttl' => 3600,
            'headers' => [
                'Connection' => 'keep-alive',
            ],
            'force_http2' => true,
        ]);
        $base = explode("/", $method);
        try {
            $request = $client->get("https://api.kavenegar.com/v1/" . self::SMS_API_KEY . "/{$base[0]}/{$base[1]}.json", [
                "query" => $data
            ]);

            return json_decode($request->getBody()->getContents());
        } catch (ClientException $e) {
            return json_decode($e->getResponse()->getBody()->getContents());
        } catch (ConnectException $e) {
            Logger::error($e->getMessage());
            throw new GraphqlError('در برقراری خطا با سرور پیامکی خطایی رخ داده است');
        } catch (Exception $e) {

            throw new GraphqlError($e->getMessage());
        }
    }
}
