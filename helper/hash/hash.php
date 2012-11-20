<?php
/**
 * Description of hash
 *
 * @author gokhan
 */
class hash {
    public function admin_login_psw($salt_psw){
        return md5(md5($salt_psw).md5('ken').md5('din').md5('den'));
    }
    public function member_psw($salt_psw){
        return md5(serialize(md5(md5($salt_psw).md5('ken').md5('din').md5('den'))));
    }    
}

?>
