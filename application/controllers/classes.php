<?php

class classes extends CI_Controller {
    
    public function index(){
        $is_cplogged_in = $this->session->userdata('is_cplogged_in');
        
        if(!isset($is_cplogged_in) || $is_cplogged_in != true){
            redirect('cpanel');
        }else{
            $this->load->model('classes_m');
            $sent = "";
	    
	    if(isset($_POST['upload'])){
		$data = $this->classes_m->upload2();
                $sent = $data['sent'];
	    }
            
            $this->load->view('admin_template/index', array(
                'view_name' => 'cpanel/classes_v',
		         'classes' => $this->classes_m->our_classes(),
                'sent' => $sent
            ));
        }
    }
    
}