<?php
 class session {
    public function __get($name){
        return isset($_SESSION[$name])? $_SESSION[$name] : FALSE;
    }
    
    public function __set($name, $value) {
        $_SESSION[$name] = $value;
        return  $_SESSION[$name];
    }
    
    public function destroy(){
        return session_destroy();
    }
}
?>
