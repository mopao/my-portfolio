<?php
namespace App\ObjectManagers;
Class MailManager{

	public $mailer;
  function __construct(){

    // Create the Transport
		$transport = new \Swift_SmtpTransport('smtp.mail.yahoo.com',587,'tls');
		$transport->setUsername('webbapp2@yahoo.com');
		$transport->setPassword('gjgzyuhuvzksmwsv');

		// Create the Mailer using your created Transport
		$this->mailer = new \Swift_Mailer($transport);

  }



 // this function sends an email to the support staff
	Public function sendContactMessage($content, $senderName,$senderEmail){
		// Create a message
		$message = new \Swift_Message("Customer Inquiry");
		$message ->setFrom(['webbapp2@yahoo.com' => 'Portfolio FC']);
		$message ->setTo(['frankyves90@gmail.com' => 'FY']);
		$type = $message->getHeaders()->get('Content-Type');
    $type->setValue('text/html');
    $type->setParameter('charset', 'utf-8');
    //set the message content
    $message ->setBody($content ."<p>" . $senderName . "<br/>" . $senderEmail . "</p>");
    $result = $this->mailer->send($message);
	}


}

?>
