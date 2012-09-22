<?php 
/**
 * Class request
 *
 * @version   0.1
 * @author    Gokhan Aygun <programci13@gmail.com>
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright Gokhan Aygun
 * @date      15/04/2011 
 */
class Request{

	public $buffer;
	public $get;
	public $post = array();
	public $request;
	public $files;
	public $env;
	public $cookie;

	public function __construct($buffer){
		$this->buffer = $buffer; 
	} 
	public function __get($name){
		return $this->buffer->$name;
	}

	public function __set($name, $val){
		$this->buffer->$name = $val;
	}

}
?>
