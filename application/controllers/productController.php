<?php 
class productController extends Controller{
    public function index(){    
        if(!isset($this->session->member_info->member_id)){
            $this->redirect->url($this->config['root_url'].'/member/login/');
            exit();
        }
        $data = array();
        $this->load_model('category');
        $top_category = $this->category->get_category();
        foreach ($top_category as $category){
            $data['category_top'][$category->category_id] = $category->category_name;
        }
        $this->display_view('product/step1.tpl',$data);
    }
   	
}
?>																	
