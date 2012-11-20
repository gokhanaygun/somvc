<?php 
/**
 * Class buffer
 *
 * @version   0.1
 * @author    Gokhan Aygun <programci13@gmail.com>
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright Gokhan Aygun
 * @date      15/04/2011 
 */
abstract class Model extends Database {

	public $buffer;

	public function __construct($buffer){
		$this->buffer = $buffer; 
		$this->db =    $this->buffer->db;
	} 
	public function __get($name){
		return $this->buffer->$name;
	}

	public function __set($name, $val){
		$this->buffer->$name = $val;
	}
}
?>