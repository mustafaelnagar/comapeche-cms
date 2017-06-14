<?php

class Customers extends CI_Controller {
    
    public function index(){
        $is_cplogged_in = $this->session->userdata('is_cplogged_in');
        
        if(!isset($is_cplogged_in) || $is_cplogged_in != true){
            redirect('cpanel');
        }else{
            $this->load->model('customers_m');
            $sent = "";
            
            if(isset($_POST['upload'])){
		$data = $this->customers_m->upload();
                $sent = $data['sent'];
	    }
            
            $this->load->view('admin_template/index', array(
                'view_name' => 'cpanel/customers_v',
		'customers' => $this->customers_m->get_logos(),
                'sent' => $sent
            ));
        }
    }
    
}