<?php 
/**
 * Somvc 0.1
 * @version   0.1
 * @author    Gokhan Aygun <programci13@gmail.com>
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright Gokhan Aygun
 * @date      02/01/2011
 */
ini_set('error_reporting', E_ALL);
ini_set('display_errors','On'); 
session_start();

/*
	System dizinleri
*/

define('__Application_Dir__', 'application');
define('__Core_Dir__', 'core');
define('__System_Dir__', 'application/setting');
define('__Model_Dir__', 'application/models');
define('__Controller_Dir__', 'application/controllers');
define('__View_Dir__', 'application/views');
define('__Helper_Dir__', 'helper');
define('__Config_Dir__', 'application/configs');
define('__Error_Dir__', 'application/error');
define('__Tmp_Dir__', 'application/tmp');
define('__Cache_Dir__', 'application/cache');
include(__Config_Dir__ . '/config.php');
include(__Config_Dir__ . '/database.php');

/*
	ilk giris
*/
if(  !defined('__Site_Path__') ) { 
 include __System_Dir__ . '/bootstrap.php';
}



include __System_Dir__ . '/system.class.load.file.php';

include __System_Dir__ . '/system.start.php';

?>																	
