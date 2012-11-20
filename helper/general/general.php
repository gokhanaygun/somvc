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
            $s = is_array($s) ? array_map('$this->clean', $s) : ( ($html==true)? htmlspecialchars($this->clean_string($s)) : $this->clean_string($s) );
            return $s;
    }
    public function tr2en($s) {
            $a = array('ö','ç','s','i','g','ü','Ö','Ç','S','I','G','Ü','-');
            $b = array('o','c','s','i','g','u','O','C','S','I','G','U',' ');
            return str_replace($a, $b, $s);
    }

    public function sef($s, $l=true) {

            $s = $this->tr2en($s);

            $a = array('ö','ç','ş','ı','ğ','ü','Ö','Ç','Ş','İ','Ğ','Ü','-','â','ê','ô','î','î','û','à','è','ì','ò','ù','á','é','í','ó','ú','Â','Ê','Ô','Î','Î','Û','À','È','Ì','Ò','Ù','Á','É','Í','Ó','Ú','/','\\');
            $b = array('o','c','s','i','g','u','O','C','S','I','G','U',' ','a','e','o','i','i','u','a','e','i','o','u','a','e','i','o','u','A','E','O','I','I','U','A','E','I','O','U','A','E','I','O','U',' ',' ');
            $s = str_replace($a, $b, $s);

            $s = preg_replace('/([^0-9a-zA-Z ]*)/i', '', $s);
            $s = preg_replace('/([\s\s]++)/i', ' ', $s);

            $s = trim($s);
            $s = str_replace(' ', '-', $s);

            if ($l) $s = strtolower($s);

            return $s;
    }    
}

?>
