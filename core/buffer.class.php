<?php 
/**
 * Class buffer
 *
 * @version   0.1
 * @author    Gokhan Aygun <programci13@gmail.com>
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright Gokhan Aygun
 * @date      02/01/2011
 */
class buffer {

	private $vars = array();


	public function __set($i , $v){
		$this->vars[$i] = $v;
	}

	public function __get($i){
		return @$this->vars[$i];
	}
}
?>