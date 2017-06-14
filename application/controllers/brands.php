<?php

class Brands extends CI_Controller {
    
    public function index(){
        $is_cplogged_in = $this->session->userdata('is_cplogged_in');
        
        if(!isset($is_cplogged_in) || $is_cplogged_in != true){
            redirect('cpanel');
        }else{
            $this->load->model('brands_m');
            $sent = "";
	    
	    if(isset($_POST['upload'])){
		$data = $this->brands_m->upload2();
                $sent = $data['sent'];
	    }
            
            $this->load->view('admin_template/index', array(
                'view_name' => 'cpanel/brands_v',
		         'brands' => $this->brands_m->get_brands(),
                'sent' => $sent
            ));
        }
    }
    
}