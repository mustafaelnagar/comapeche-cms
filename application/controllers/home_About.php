<?php

class home_about extends CI_Controller {
    
    public function index(){
        $is_cplogged_in = $this->session->userdata('is_cplogged_in');
        
        if(!isset($is_cplogged_in) || $is_cplogged_in != true){
            redirect('cpanel');
        }else{
            $this->load->model('about_m');
            $sent = "";
            
            if($_POST){
		$data = $this->about_m->upload2();
                $sent = $data['sent'];
	    }
            
            $this->load->view('admin_template/index', array(
                'view_name' => 'cpanel/ehome_About_v.php',
		'about' => $this->about_m->pull(),
                'sent' => $sent
            ));
        }
    }
    
}