<?php

class Services_list_add_new extends CI_Controller {
    function __construct(){
       parent::__construct();
	   $this->load->model('services_add_new_m');
	}
    public function index(){
        $is_cplogged_in = $this->session->userdata('is_cplogged_in');
        
        if(!isset($is_cplogged_in) || $is_cplogged_in != true){
            redirect('cpanel');
        }else{
            
            $sent = "";
	    
	    if($_POST){
		// $data = $this->services_m->upload2();
		$sent = $this->services_add_new_m->addservice();
                // $sent = $data['sent'];
	    }
            
            $this->load->view('admin_template/index', array(
                'view_name' => 'cpanel/services_list_add_new_v',
		        
                 'sent' => $sent
            ));
        }
    }
    
}