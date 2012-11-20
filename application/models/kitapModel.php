<?php 
class kitapModel extends Model{

    function allList(){
		return $this->db->get_results("SELECT * FROM somes_dil");
    }	
}
?>