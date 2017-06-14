<?php

class Profile extends CI_Controller {
    
    public function index() {
        $is_cplogged_in = $this->session->userdata('is_cplogged_in');
        
        if(!isset($is_cplogged_in) || $is_cplogged_in != true){
            redirect('cpanel');
        }else{
            $this->load->model('profile_m');
            $sent = "";
            
            if(isset($_POST['send'])){
		
		$sent = $this->profile_m->update();
	    }
            
            $this->load->view('admin_template/index', array(
                'view_name' => 'cpanel/profile_v',
                'profile' => $this->profile_m->pull(),
                'sent' => $sent
            ));
        }
    }
}