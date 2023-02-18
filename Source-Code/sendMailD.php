<?php
class sendMailD
{	

	private $conn;
	
	
	
	function sendMail($email,$message,$subject)
	{						
		require_once('mailer/class.phpmailer.php');
		$mail = new PHPMailer();
		/*$mail->IsSMTP(); 
		$mail->SMTPDebug  = 0;                     
		$mail->SMTPAuth   = true;                  
		$mail->SMTPSecure = "tls";                 
		$mail->Host       = "smtp.gmail.com";      
		$mail->Port       = 587;             
		$mail->AddAddress($email);
		  
		$mail->Username="chavanrachit16e@student.mes.ac.in";  
		$mail->Password="rahul.22.07";   
		  
		$mail->SetFrom('chavanrachit16e@student.mes.ac.in','PCE Software Team');
		$mail->Subject    = $subject;
		$mail->MsgHTML($message);*/
        
        //$mail->isSMTP();
//$mail->SMTPDebug = 2;
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;

// But you can comment from here
$mail->SMTPSecure = "ssl";
$mail->Port = 465;
$mail->CharSet = "UTF-8";
$mail->addAddress($email);
// To here. 'cause default secure is TLS.

$mail->setFrom("foodwastagemanger@gmail.com", 'Rasoi');
$mail->Username = "foodwastagemanger@gmail.com";
$mail->Password = "shreyatej93";

$mail->Subject = $subject;
$mail->msgHTML($message);

        $mail->isSMTP();
        
		if(!$mail->send()) {
			  return "FAIL";
		} else {
  				return "OK";
		}

	}	
}

?>
