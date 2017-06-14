<?php

class Eservices extends CI_Controller {
    
    public function index(){
        $is_cplogged_in = $this->session->userdata('is_cplogged_in');
        
        if(!isset($is_cplogged_in) || $is_cplogged_in != true){
            redirect('cpanel');
        }else{
            $this->load->model('services_m');
            $sent = "";
            
            if(isset($_POST['upload'])){
		$data = $this->services_m->upload();
                $sent = $data['sent'];
	    }
            
            $this->load->view('admin_template/index', array(
                'view_name' => 'cpanel/eservices_v',
		'services' => $this->services_m->index(),
                'sent' => $sent
            ));
        }
    }
    
}