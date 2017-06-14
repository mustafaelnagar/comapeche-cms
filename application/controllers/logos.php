<?php

class logos extends CI_Controller {
    
    public function index(){
        $is_cplogged_in = $this->session->userdata('is_cplogged_in');
        
        if(!isset($is_cplogged_in) || $is_cplogged_in != true){
            redirect('cpanel');
        }else{
            $this->load->model('logos_m');
            $sent = "";
	    
	    if($_POST){
		$data = $this->logos_m->upload2();
                $sent = $data['sent'];
	    }
            
            $this->load->view('admin_template/index', array(
                'view_name' => 'cpanel/logos_v',
		         'logos' => $this->logos_m->our_services(),
                'sent' => $sent
            ));
        }
    }
    
}