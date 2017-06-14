<?php

class Elogos extends CI_Controller {
    
    public function index(){
        $is_cplogged_in = $this->session->userdata('is_cplogged_in');
        
        if(!isset($is_cplogged_in) || $is_cplogged_in != true){
            redirect('cpanel');
        }else{
            $this->load->model('logos_m');
            $sent = "";
	    
	    if(isset($_POST['upload'])){
		$data = $this->logos_m->update_logo();
                $sent = 'sent';//elnagar :D
	    }
            
            $this->load->view('admin_template/index', array(
                'view_name' => 'cpanel/elogos_v',
		        'service' => $this->logos_m->pull(),
                'sent' => $sent
            ));
        }
    }
    
}