<?php

class best_three extends CI_Controller {
 
    function index(){
        $this->load->model('best_three_m');
        $is_cplogged_in = $this->session->userdata('is_cplogged_in');
        
        if(!isset($is_cplogged_in) || $is_cplogged_in != true){
            redirect('cpanel');
        }else{
            
            $sent = "";
	    
	    if($_POST){
		$data = $this->best_three_m->upload2();
                $sent = $data['sent'];
	    }
            
            $this->load->view('admin_template/index', array(
                'view_name' => 'cpanel/best_three_v',
		        'portfolio' => $this->best_three_m->index(),
                'sent' => $sent
            ));
        }
    }
    
}