<?php 
header( "Content-Type: application/json" );
require_once('config.php');
require_once('phpmailer/class.phpmailer.php');
@session_start();

$e = 0;
$err = "";
$mail = new PHPMailer();

$security_code = $_SESSION['security_code'];
$name = $_POST['cname'];
$email = $_POST['cemail'];
$subject = $_POST['subject'];
$cmsg = $_POST['cmsg'];
$scode = $_POST['scode'];

if(!empty($scode) and ($security_code != $scode))
{
	$err .= "Invalid security code.";
}
else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) 
{
	$err .= "Invalid email format.";
}
else
{			
	$mail->IsSMTP();                                      // Set mailer to use SMTP
	$mail->Host = $smtp_host;     					  // Specify main and backup server
	$mail->Port = $smtp_port;                         // Set the SMTP port
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = $smtp_user;                	  // SMTP username
	$mail->Password = $smtp_pwd;                  	  // SMTP password
	$mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted
	$mail->IsHTML(true);                                  // Set email format to HTML
							
	$email_str = '<table width="100%" border="0">
				  <tr>
					<td width="18%">&nbsp;<strong>Name</strong></td>
					<td width="2%" align="center"><strong>:</strong></td>
					<td width="80%">&nbsp;'.$name.'</td>
				  </tr>
				  <tr>
					<td>&nbsp;<strong>Email ID</strong></td>
					<td align="center"><strong>:</strong></td>
					<td>&nbsp;'.$email.'</td>
				  </tr>
				  <tr>
				    <td>&nbsp;<strong>Subject</strong></td>
				    <td align="center"><strong>:</strong></td>
				    <td>&nbsp;'.$subject.'</td>
  				  </tr>
				  <tr>
				    <td>&nbsp;<strong>Message</strong></td>
				    <td align="center"><strong>:</strong></td>
				    <td>&nbsp;'.$cmsg.'</td>
  				  </tr>
				</table>';
				
	$mail->From = $email;
	$mail->FromName = $name;
	$mail->AddAddress($admin_email);         		  // Name is optional
	$mail->Subject = $sitename." Contact From : ".$name;
	$mail->Body  = $email_str;			
	if(!$mail->Send()) {   
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		$e = 1;
		$err = "Your contact information has been successfully submitted.";
	}
}
echo json_encode(array('e'=>$e,'msg'=>$err));
?>