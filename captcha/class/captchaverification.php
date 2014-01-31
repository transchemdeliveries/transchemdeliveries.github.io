<?php
class CaptchaVerification{
	var $UserString;
	var $font_path;
  
	function CaptchaVerification(){
		$this->font_path = 'captcha/fonts/ARIAL.TTF';
	}
	function LoadPNG(){        		
		if(!$im){
			$im  = imagecreatetruecolor(80, 15);
			$bgc = imagecolorallocate($im, 255, 255, 255);
			$tc  = imagecolorallocate($im, 0, 0, 0);
			imagefilledrectangle($im, 0, 0, 80, 15, $bgc);
		}
		return $im;
	}
	function task_string(){		
		$image = $this->LoadPNG();  
		$string_a = array("A","B","C","D","E","F","G","H","J","K",
						  "L","M","N","P","R","S","T","U","V","W","X","Y","Z", "1", 
						  "2","3","4","5","6","7","8","9");
		for($i=0;$i<5;$i++){
			$colour     = imagecolorallocate($image, rand(0,155), rand(0,155), rand(0,155));
			$font		= $this->font_path;
			$angle      = rand(-0,0);
			$width_pos  = 12;
			$_SESSION['int_width'] = "Width --> " . $width;
			$width      = $width + $width_pos;
			$height     = 14;
			$temp       = $string_a[rand(0,15)];
			$this->UserString .= $temp;
			imagettftext($image, 12, $angle, $width, $height, $colour, $font, $temp);
		}		
		$_SESSION['captcha'] = $this->UserString;		
		return $image;
	}
 
	function display(){
		$image  = $this->task_string();
		header("Content-type: image/png");
		imagepng($image); 
	} 

	function check_result(){
		if($_SESSION['captcha'] != $_REQUEST['capt'] || $_SESSION['captcha'] == 'BADCODE'){
			$_SESSION['captcha'] == 'BADCODE';
			return false;
		}else{
			return true;
		}
	}
}
?>