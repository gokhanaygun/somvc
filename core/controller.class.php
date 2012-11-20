<?php 
/**
 * Class controller
 *
 * @version   0.1
 * @author    Gokhan Aygun <programci13@gmail.com>
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright Gokhan Aygun
 * @date      15/04/2011 
 */
abstract class Controller {

public $buffer;
public $request;
public $session;
public $redirect;
public $general;
public $config;
public $database;
public $error_message;
public function __construct($buffer){
	$this->buffer = $buffer;
        $this->request = $this->buffer->request;
        $this->redirect = $this->buffer->redirect;
        $this->session  = $this->buffer->session;
        $this->general  = $this->buffer->general;
        $this->config = $this->buffer->config;
        $this->database = $this->buffer->database;
        $this->error_message = $this->buffer->error_message;
}

public function display_view($file, $data=array()){
	$total_data = sizeof($data);
	if($total_data > 0){
		$keys_value = array_keys($data);
		for($item = 0; $total_data > $item; $item++){
			$this->buffer->template->assign($keys_value[$item], $data[$keys_value[$item]]);
		}
	}
	$this->buffer->template->assign('config', $this->buffer->config);
	$this->buffer->template->display($file);
}

public function load_model($model_name){
	if( file_exists(__Model_Dir__.'/'.$model_name.'Model.php') ){
		include(__Model_Dir__.'/'.$model_name.'Model.php');
		$model_class_name = $model_name.'Model';
		$this->$model_name = new $model_class_name($this->buffer);
	} else {
		die($this->buffer->error_message[11]);
		
	}
		
}
public function load_helper($helper_name, $arg = ''){
    $status = TRUE;  
    if( file_exists(__Helper_Dir__.'/'.$helper_name.'/'.$helper_name.'.php') ){
        include(__Helper_Dir__.'/'.$helper_name.'/'.$helper_name.'.php');
        $helper_class_name = $helper_name;
        $this->$helper_name = new $helper_class_name($arg);     
		return $this->$helper_name;        
    } else {
        $status = FALSE;
    }
    
    if($status == FALSE ){
	
        if( file_exists(__Helper_Dir__.'/'.$helper_name.'.php') ){
            include(__Helper_Dir__.'/'.$helper_name.'.php');
            $helper_class_name = $helper_name;
            $this->$helper_name = new $helper_class_name($arg);   
            $status == TRUE;   
			return $this->$helper_name;	
        }       
    }
    
    if($status == FALSE){
      $this->buffer->error_message(12);    
    }

}


abstract function index();
}
?>
