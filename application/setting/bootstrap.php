<?php
$site_path = realpath( @dir( __FILE__ ) );
define('__Site_Path__', $site_path);
define('__System_Language__', $config['sys_lang']);

/*
	Dil seçilsin
*/
include(__Error_Dir__ . '/'. __System_Language__ . '.php');
?>