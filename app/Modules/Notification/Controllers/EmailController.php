<?php

namespace App\Modules\Notification\Controllers;

use App\Core\Exceptions\GraphqlError;
use App\Http\Controllers\Controller;
use PHPMailer\PHPMailer\PHPMailer;

class EmailController extends Controller
{
   protected const EMAIL_HOST = "kalabazar.com";
    protected  const EMAIL_PORT = 587;
    protected  const EMAIL_USERNAME = "support@kalabazar.com";
    protected  const EMAIL_PASSWORD = "DrZdBxXVwLnpcDGCy5Uf";
    protected const EMAIL_FROM = "support@kalabazar.com";
    protected const EMAIL_FROM_NAME = "kalabazar Support";

    public function send($args)
    {
        if ($this->baseRequest($args['receptors'], @$args['subject'], $args['body'])) {
            return [
                "status" => true,
                "message" => "ارسال موفق"
            ];
        }
        return [
            "status" => false,
            "message" => "ارسال ناموفق"
        ];
    }

    protected function baseRequest($receptors, $subject = null, $body)
    {
        $mail = new PHPMailer(TRUE);

        $mail->CharSet = "UTF-8";
        $mail->SMTPDebug = FALSE;
        $mail->isSMTP();
        $mail->Host = self::EMAIL_HOST;
        $mail->SMTPAuth = TRUE;
        $mail->Username = self::EMAIL_USERNAME;
        $mail->Password = self::EMAIL_PASSWORD;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = self::EMAIL_PORT;

        $mail->setFrom(self::EMAIL_FROM, self::EMAIL_FROM_NAME);
        $mail->addReplyTo(self::EMAIL_FROM, self::EMAIL_FROM_NAME);
        if (is_string($receptors)) {
            $receptors = [$receptors];
        }
        foreach ($receptors as $receptor) {
            $mail->addAddress($receptor);
        }
        $mail->isHTML(TRUE);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AltBody = $this->htmlToPlainText($body);
        $mail->addCustomHeader('List-Unsubscribe: <mailto:support@kalabazar.com>');
        try {
            $mail->send();
            return true;
        } catch (\Exception $e) {
            throw new GraphqlError($e->getMessage());
        }
    }
    private function htmlToPlainText($html) {
        $text = strip_tags($html);

        $text = html_entity_decode($text, ENT_QUOTES | ENT_HTML5, 'UTF-8');

        $text = preg_replace('/\s+/', ' ', $text);

        $text = trim($text);

        return $text;
    }
}
