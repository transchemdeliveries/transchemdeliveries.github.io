<?php
session_start();
if(isset($_POST['SUBMIT'])){
	$bln_captcha = false;
	include("captcha/class/captchaverification.php");
	$capt = new CaptchaVerification;
	if($capt->check_result()){
		$bln_captcha = true;
	}
	
	if($bln_captcha == true){
		$to = 'sanjai.jalla@transchemdeliveries.com';
		$to1 = 'neetu.sohal@transchemdeliveries.com';
		$sub = "Query From Transchem Deliveries";
		$from = trim($_POST['email']);
		$comments = trim($_POST['comments']);
		$uname = trim($_POST['uname']);
		$company = trim($_POST['company']);
		$phone = trim($_POST['phone']);
		
		$msg = "<table align='center' border='0' cellpadding='0' cellspacing='0' width='550' >
					<tr>
						<td><font style='font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;color:#000000'>Hi, </font></td>
					</tr>
					<tr><td height='10'></td></tr>
					<tr>
						<td><font style='font-family:Arial, Helvetica, sans-serif;font-size:12;'>Name : ".$uname."</font></td>
					</tr>
					<tr><td height='10'></td></tr>
					<tr>
						<td><font style='font-family:Arial, Helvetica, sans-serif;font-size:12;'>Phone : ".$phone."</font></td>
					</tr> 
					<tr><td height='10'></td></tr>
					<tr>
						<td><font style='font-family:Arial, Helvetica, sans-serif;font-size:12;'>Comments : ".$comments."</font></td>
					</tr>
				</table>";
		
		$headers = 	'MIME-Version: 1.0' . "\r\n" . 
						'Content-type: text/html; charset=iso-8859-1' . "\r\n" . 
						'From: ' . $uname . ' <' . $from . ">\r\n" .
						'Reply-To: ' . $from . "\r\n" .
						'X-Mailer: PHP/' . phpversion(); " \r\n";
		mail($to, $sub, $msg, $headers);
		mail($to1, $sub, $msg, $headers);
		echo "<script language=\"javascript\">" . PHP_EOL;
		echo "document.location.href = 'thankyou.html';" . PHP_EOL;
		echo "</script>" . PHP_EOL;
	}else{
		echo "<script language=\"javascript\">" . PHP_EOL;
		echo "alert('You\'ve entered wrong value in verification code. Please try again.');" . PHP_EOL;
		echo "document.location.href = 'contact-us.html';" . PHP_EOL;
		echo "</script>" . PHP_EOL;
	}
}
?>