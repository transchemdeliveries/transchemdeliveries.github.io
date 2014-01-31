<?
session_start();
include("captcha/class/captchaverification.php");

$capt = new CaptchaVerification;
$_SESSION['UserString'] = $capt->UserString;
$capt->display();
?>
