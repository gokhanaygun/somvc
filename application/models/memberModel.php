<?php

class memberModel extends Model {
    public function check_username($username){
        return 
        ( $this->db->get_var("SELECT COUNT(member_id) FROM {$this->buffer->database['table_prefix']}_member 
        WHERE member_username = '{$username}'  LIMIT 1") == 0)? TRUE : FALSE;
    }
    public function check_email($email){
        return 
        ( $this->db->get_var("SELECT COUNT(member_id) FROM {$this->buffer->database['table_prefix']}_member 
        WHERE member_email = '{$email}'  LIMIT 1") == 0)? TRUE : FALSE;
    }
    public function add_member($data){
        $time = time();
        $sql = "INSERT INTO {$this->buffer->database['table_prefix']}_member(
           member_name, member_surname, member_email, member_password, 
           member_register_date, member_gender, member_birthday, member_country, member_city, member_username)  
         VALUES('{$data['name']}', '{$data['surname']}', '{$data['email']}', '{$data['password']}', {$time}, '{$data['gender']}',
         '{$data['birthday']}', '{$data['country']}', '{$data['city']}', '{$data['username']}')";
         $this->db->query($sql);
         return $this->db->insert_id;
    }
    
    public function login($email, $password){
        $sql = "SELECT * FROM {$this->buffer->database['table_prefix']}_member  WHERE
        member_email = '{$email}' AND member_password = '{$password}' AND member_approved = 1     
        LIMIT 1 ";

        $member_infos = $this->db->get_row($sql);
        if(sizeof($member_infos) > 0){
            return $member_infos;
        } else {
            return FALSE;
        }
    }
}

?>
