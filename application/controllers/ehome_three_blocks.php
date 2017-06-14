<?php

class ehome_three_blocks extends CI_Controller {
    
    public function index(){
		// Turn off all error reporting
// error_reporting(0);
        $is_cplogged_in = $this->session->userdata('is_cplogged_in');
        
        if(!isset($is_cplogged_in) || $is_cplogged_in != true){
            redirect('cpanel');
        }else{
            $this->load->model('ehome_three_blocks_m');
            
            
            if(isset($_POST)){
			///Go to update&upload  , then view 
		$data=$this->ehome_three_blocks_m->edit_blocks_with_update();
		$sent = $data['sent'];
	    }
            
            $this->load->view('admin_template/index', array(
                'view_name' => 'cpanel/ehome_three_blocks_v',
		         'home' => $this->ehome_three_blocks_m->blocks(),
                 'sent' => $sent
            ));
        }
    }
    
}