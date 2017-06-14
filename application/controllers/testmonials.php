<?php

class testmonials extends CI_Controller {
    
    public function index(){
        $is_cplogged_in = $this->session->userdata('is_cplogged_in');
        
        if(!isset($is_cplogged_in) || $is_cplogged_in != true){
            redirect('cpanel');
        }else{
            $this->load->model('testmonials_m');
            $sent = "";
            
            if(($_POST)){
			#submit the form
		$data = $this->testmonials_m->add_new_testmonial();
                $sent = $data['sent'];
	    }
            
            $this->load->view('admin_template/index', array(
                'view_name' => 'cpanel/testmonials_v',
	            'banner' => $this->testmonials_m->get_testmonials(),
                'sent' => $sent
            ));
        }
    }
    
}