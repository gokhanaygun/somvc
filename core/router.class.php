<?php 
/**
 * Class router
 *
 * @version   0.1
 * @author    Gokhan Aygun <programci13@gmail.com>
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright Gokhan Aygun
 * @date      16/04/2011 
 */
class router {

private $buffer;
public $controller;
private $action;
public  $get_params = array(); 
private $path;
private $c_path;
private $c_class_name;

public function __construct($v, $p){
	$this->buffer = $v;
	if( is_dir($p)  ){
		$this->c_path = $p;
	} else {
		die($this->buffer->error_msg[10]);
	}
	
}

public function get_elementer(){

    if(isset($_GET['rt'])){
          
        $params = explode( '/', $_GET['rt']); 
        
        if(sizeof($params) > 1){
            list( $controller, $action) =  explode( '/', $_GET['rt']);   
        } else {
            $controller = $params[0];
        }

        if( sizeof($params) > 2 ){
            for($params_item=2; (sizeof($params)-1) > $params_item;  $params_item++ ){
                $this->get_params[ $params[$params_item] ]  = $params[$params_item+1];
                $this->buffer->request->get[ $params[$params_item]] = $params[$params_item+1];
                $params_item++;
            } 
        }
        
                      
    }   else {
        $controller     = '';
        $action         = '';      
    }
    
	if( ! empty($controller)){
		
		$this->controller 	= (!empty($controller) )? strtolower ( $controller ) : 'index';
		$this->action 		= (!empty($action) )? strtolower ( $action ) : 'index';
		$this->controller 	= ($this->controller == 'index.php') ? 'index' : $this->controller ;   
		
	} else {
		$this->controller = $this->buffer->config['default_controller'];
		$this->action = $this->buffer->config['default_action'];
	}

	$this->c_class_name = $this->controller . 'Controller';
	$this->path = $this->c_path . '/' . $this->controller . 'Controller.php'; 
	
        if(file_exists($this->path)){
            include($this->path);
        } else {
            //controller tanımsız
            printf($this->buffer->error_message[9],$this->controller);
            die();
        }
}

public function load(){
	//$this->get_elementer();
	$controller_class_name = new $this->c_class_name( $this->buffer );
	$action = $this->action;
        if( ! method_exists($controller_class_name, $action)){
            printf($this->buffer->error_message[8],$this->controller,$action);
            die();
        }
	$controller_class_name->$action();
}

}
?>