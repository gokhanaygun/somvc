<?php
class general {
    private $db;
    public function __construct($db) {
       $this->db = $db;
   }
   public function clean_string($s) {
            if (  
                    ( function_exists("get_magic_quotes_gpc") && get_magic_quotes_gpc() )
                    ||
                    ( ini_get('magic_quotes_sybase') && strtolower(ini_get('magic_quotes_sybase'))!='off' )
            ){
                    $s = stripslashes($s);
            }
            $s = $this->db->escape_string($s);
            return $s;
    }
   public function clean($s, $html =true) {
            $s = is_array($s) ? array_map('', $s) : ( ($html==true)? htmlspecialchars($this->clean_string($s)) : $this->clean_string($s) );
            return $s;
    }
}

?>
