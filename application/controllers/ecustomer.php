<?php

class Ecustomer extends CI_Controller {
    
    function index() {
        $is_cplogged_in = $this->session->userdata('is_cplogged_in');
        
        if(!isset($is_cplogged_in) || $is_cplogged_in != true){
            redirect('cpanel');
        }else{
            $this->load->model('customers_m');
            $sent = "";
            
            if(isset($_POST['upload'])){
		$data = $this->customers_m->upload2();
                $sent = $data['sent'];
	    }
            
            $this->load->view('admin_template/index', array(
                'view_name' => 'cpanel/ecustomer_v',
                'customer' => $this->customers_m->pull(),
                'sent' => $sent
            ));
        }
    }
}