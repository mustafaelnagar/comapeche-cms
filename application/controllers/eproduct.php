<?php

class Eproduct extends CI_Controller {
    
    function index(){
        $is_cplogged_in = $this->session->userdata('is_cplogged_in');
        
        if(!isset($is_cplogged_in) || $is_cplogged_in != true){
            redirect('cpanel');
        }else{
            $this->load->model('products_m');
            $sent = "";
	    
	    if(isset($_POST['upload'])){
		$data = $this->products_m->upload2();
                $sent = $data['sent'];
	    }
            
            $this->load->view('admin_template/index', array(
                'view_name' => 'cpanel/eproduct_v',
		'product' => $this->products_m->pull(),
                'sent' => $sent
            ));
        }
    }
    
}