<?php

class captcha {
   
   public function __construct() {
       $this->session = $session;
   }
   public function create($session_name){
    $letter = array('A','a','B','b','C','c','D','d','E','e','F','f','G','g','H','h','i','u','U','r','p','y','X','V','Q','W');
    $text = $letter[rand(0,25)] . $letter[rand(0,25)] . rand(0,60000);
    $_SESSION[$session_name] = $text;
    header("Content-type: image/png"); 
    
    $my_img=imagecreate(150,40);
    
    $turunce = imagecolorallocate($my_img,255,200,0);
    
    $black = imagecolorallocate($my_img,0,0,0);
    $font = 'segoesc.ttf';
    imagettftext($my_img, 15, -6, 15, 25, $black, $font, $text);
    
    imagepng($my_img);
    
    imagedestroy($my_img);       
   }
}

?>
