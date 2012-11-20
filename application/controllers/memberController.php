<?php 
class memberController extends Controller{
    public function index(){}
    public function register(){     
        $data = array();

        $data['countryOptions'] = array(1800 => 'Central Africa Republic',90 => 'Türkiye',2003 => 'Usa');
        $data['cityOptions'] = array(1800 => 'Central Africa Republic',90 => 'Türkiye',2003 => 'Usa');
        $data['monthOptions'] = array('Ay','Ocak','Şubat','Mart','Nisan','Mayıs','Haziran','Temmuz','Ağustos','Eylül','Ekim','Kasım','Aralık');
        $data['dayOptions'] = array('Gün',1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22, 23, 24,25,26,27,28,29,30,31);
        for($item=2000; $item > 1950; $item--){
                $data['yearOptions'][$item] = $item;
        }
        $data['gender_ids'] = array('kadin','erkek');
        $data['gender_names'] = array('Kadın','Erkek');

        $data['contract_approved'] = array(1=>'Üyelik sözleşmesini okudum kabul ediyorum');
        $this->load_model('member');

        if(isset($this->request->post['submit_button'])){
            $data['form_error'] = TRUE; 

                if(isset($this->request->post['username'])){
                        $data['username'] = $this->request->post['username'];
                        if(strlen($data['username']) < 6 || strlen($data['username']) > 30){
                                $data['username_r'] = 'Kullanıcı adınız 6 ile 30 karakter olmalı';
                                $data['form_error'] = FALSE; 
                        } else {
                            if($this->member->check_username($data['username']) == FALSE ){
                                $data['username_r'] = 'Bu kullanıcı adı kullanımda';
                                $data['form_error'] = FALSE; 
                            }                                
                        }
                }			
                if(isset($this->request->post['gender'])){
                        $data['gender']	= $this->request->post['gender'];
                } else {
                        $data['form_error'] = FALSE; 
                        $data['gender_r']	=	'Cinsiyet seçmelisiniz'; 
                }	
                if(isset($this->request->post['email'])){
                        $this->load_helper('validator');
                        $data['email'] = $this->request->post['email'];
                        if($this->validator->check_email($data['email']) == FALSE){
                            $data['form_error'] = FALSE; 
                            $data['email_r'] = 'Doğru bir e-posta adresi girin';
                        } else {
                            if($this->member->check_email($data['email']) == FALSE ){
                                $data['form_error'] = FALSE; 
                                $data['email_r'] = 'Bu e-posta adresi kullanımda';
                            }
                        }
                }		
                if(isset($this->request->post['country'])){
                        $data['country'] = $this->request->post['country'];
                        if(strlen($data['country']) < 1){
                                    $data['form_error'] = FALSE; 
                                $data['country_r'] = 'Ülke seçmelisiniz';
                        }                             
                }
                if(isset($this->request->post['contract'])){
                        $data['contract'] = $this->request->post['contract'];                          
                } else {
                    $data['form_error'] = FALSE;     
                    $data['contract_r'] = 'Üyelik sözleşmesini kabul etmelisiniz';
                }                     
                if(isset($this->request->post['city'])){
                        $data['city'] = $this->request->post['city'];
                        if(strlen($data['city']) < 1){
                                $data['form_error'] = FALSE; 
                                $data['city_r'] = 'İl seçmelisiniz';
                        }                            
                }		
                if(isset($this->request->post['day'])){
                        $data['day'] = $this->request->post['day'];
                        if(strlen($data['day']) < 1){
                                $data['form_error'] = FALSE; 
                                $data['birthday_r'] = 'Doğum tarihinizi girmelisiniz';
                        }                             
                }
                if(isset($this->request->post['year'])){
                        $data['year'] = $this->request->post['year'];
                        if(strlen($data['year']) < 1){
                                $data['form_error'] = FALSE; 
                                $data['birthday_r'] = 'Doğum tarihinizi girmelisiniz';
                        }                              
                }		
                if(isset($this->request->post['month'])){
                        $data['month'] = $this->request->post['month'];
                        if(strlen($data['month']) < 1){
                                $data['form_error'] = FALSE; 
                                $data['birthday_r'] = 'Doğum tarihinizi girmelisiniz';
                        }                              
                }				
                if(isset($this->request->post['name'])){
                        $data['name'] = $this->request->post['name'];
                        if(strlen($data['name']) < 2 || strlen($data['name']) > 30){
                                $data['form_error'] = FALSE; 
                                $data['name_r'] = 'Adınız 2 ile 30 karakter arasında olmalı';
                        }                            
                }		
                if(isset($this->request->post['surname'])){
                        $data['surname'] = $this->request->post['surname'];
                        if(strlen($data['surname']) < 2 || strlen($data['surname']) > 30){
                                $data['form_error'] = FALSE; 
                                $data['surname_r'] = 'Soyadınız 2 ile 30 karakter arasında olmalı';
                        }                            
                }
                if(isset($this->request->post['password'])){
                        $data['password'] = $this->request->post['password'];
                        if(strlen($data['password']) < 6 || strlen($data['password']) > 18){
                                $data['form_error'] = FALSE; 
                                $data['password_r'] = 'Şifreniz 6 ile 18 karakter arasında olmalı';
                        }                            
                } 
                if(isset($this->request->post['password_confirm'])){
                        $data['password_confirm'] = $this->request->post['password_confirm'];
                        if($data['password'] != $data['password_confirm']){
                                $data['form_error'] = FALSE; 
                                $data['password_confirm_r'] = 'Şifreler birbirinden farklı';
                        }                            
                }   

                if($data['form_error'] == TRUE ){
                    $this->load_helper('hash');
                    $data['birthday'] = strtotime($data['day'].'-'.$data['month'].'-'.$data['year']);
                    $data['password'] = $this->hash->member_psw($data['password']);
                    if($this->member->add_member($data) > 0 ){
                        $this->redirect->url($this->config['root_url'].'/member/register_ok/');
                    } else {
                        $this->redirect->url($this->config['root_url'].'/member/register_error/');
                    }
                }

        }//submit end if


        $this->display_view('member/register.tpl', $data);
}
    
    public function register_ok(){
        $this->display_view('member/register_ok.tpl');
        exit();
    }
    
    public function logout(){
        $this->session->destroy();
        $this->redirect->url($this->config['root_url']);
        exit();
    }
    public function login(){     
        $data = array();

        $this->load_model('member');

        if(isset($this->request->post['submit_button'])){
            $data['form_error'] = TRUE; 

                if(isset($this->request->post['email'])){
                        $data['email'] = $this->request->post['email'];
                        if(strlen($data['email']) < 6 ){
                                $data['form_error'] = FALSE; 
                                $data['email_r'] = 'E-posta giriniz';
                        }                            
                } 				
		
                if(isset($this->request->post['password'])){
                        $data['password'] = $this->request->post['password'];
                        if(strlen($data['password']) < 6 ){
                                $data['form_error'] = FALSE; 
                                $data['password_r'] = 'Şifre giriniz';
                        }                            
                } 
                
                if($data['form_error'] == TRUE){
                    $this->load_helper('hash');
                    $member_info = $this->member->login($data['email'], $this->hash->member_psw($data['password']));
                    if($member_info != FALSE ){
                        $this->session->member_info = $member_info;
                        $this->redirect->url($this->config['root_url']);
                        exit();
                    }else {
                        $data['login_r'] = 'E-posta adresinizi ve/veya şifrenizi hatalı girdiniz!';
                    }
                }


        }//submit end if


        $this->display_view('member/login.tpl', $data);
}    
   	
}
?>																	
