<?php

class categoryModel extends Model {
  
    public function get_category($sub=0){
        return 
        $this->db->get_results("SELECT * FROM {$this->buffer->database['table_prefix']}_category 
        WHERE category_sub = {$sub} AND category_approved = 1 ");
    }
}

?>
