<?php
namespace App\Http\Controllers\Helpers;

trait mailer {
	public function sendEmail($subject,$content,$toAddress,$replyTo)
	{
		$mail = new \PHPMailer();



	$message = $content;


	$mail->IsSMTP();
	$mail->Host       = env('MAIL_HOST');
	$mail->Port       = env('MAIL_PORT');
	$mail->SMTPAuth   = true;
	$mail->SMTPSecure = env('MAIL_ENCRYPTION');
	$mail->Username   = env('MAIL_USERNAME');
	$mail->Password   = env('MAIL_PASSWORD');
	$mail->SetFrom($replyTo, "ITS Operations"); 
	$mail->AddReplyTo($replyTo, "Some name");
	$mail->AddAddress($toAddress, \Auth::user()->name);
	$mail->isHTML(true);
	$mail->WordWrap = 50;
	$mail->Subject    = $subject;
	$mail->Body       = $message;

	$mail->Send();
	}

	public function sendNewLoadEmail($toAddress,$replyTo)
	{
		$content = 'EW have a new load';
//			$this->sendEmail('New Load', $content);
	}
}
