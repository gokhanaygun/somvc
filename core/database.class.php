<?php
/**
 * Description of Database
 *
 * @author gokhan aygun
 */
class Database {
    public $connect_token;
    public $querystring;
    public $insert_id;
    public function  __construct($user, $password, $database, $server){ 
        $this->connect_token = mysql_connect($server, $user, $password);
        if($this->connect_token != ''){
            mysql_select_db($database, $this->connect_token) or die('Database bağlanamadı');
        } else {
            die('Servere bağlanamadı');
        }
    }

    public function query($querystring, $line = ''){
        $this->querystring      = mysql_query($querystring) or die('Sorgu hatalı...'.($line !=''? 'Hatalı satır :'.$line : ''));
        $this->insert_id        = mysql_insert_id();
        return $this->querystring;
    }
    public function get_results($querystring){
        $array_results = array();
        $querystring      = mysql_query($querystring);
        $rows = mysql_num_rows($querystring);
        for($i = 0; $rows >$i; $i++ ){
            array_push($array_results, mysql_fetch_object($querystring));
        }
        return $array_results;
    }
    public function get_row($querystring){
        $querystring      = mysql_query($querystring);
        return mysql_fetch_object($querystring);
    }
    public function escape_string($querystring){
        return mysql_escape_string($querystring);
    }
    public function get_var($querystring){
        return @mysql_result($this->query($querystring), 0);
    }
    public function get_enum( $table , $field ){
            $query = " SHOW COLUMNS FROM `$table` LIKE '$field' ";
            $result = mysql_query( $query ) or die( 'error getting enum field ' . mysql_error() );
            $row = mysql_fetch_array( $result , MYSQL_NUM );
            $regex = "/'(.*?)'/";
            preg_match_all( $regex , $row[1], $enum_array );
            $enum_fields = $enum_array[1];
            return($enum_fields);
    }    
    public function  __destruct() {

        //mysql_close();
    }
}
?>
