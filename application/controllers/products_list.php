<?php

class Products_list extends CI_Controller {
    
    public function index(){
        $is_cplogged_in = $this->session->userdata('is_cplogged_in');
        
        if(!isset($is_cplogged_in) || $is_cplogged_in != true){
            redirect('cpanel');
        }else{
            $this->load->model('products_m');
            $sent = "";
	    
	    if(isset($_POST['upload'])){
		$data = $this->products_m->upload();
                $sent = $data['sent'];
	    }
            
            $this->load->view('admin_template/index', array(
                'view_name' => 'cpanel/products_list_v',
		'products' => $this->products_m->products(),
                'sent' => $sent
            ));
        }
    }
    
}