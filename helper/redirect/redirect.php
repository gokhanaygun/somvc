<?php
class redirect {
    public function url($url){
        
        if(headers_sent()){
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>'; exit;
        } else {
            header('Location: '.$url); exit;
        }
    }
}
?>
