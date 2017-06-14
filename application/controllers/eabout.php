<?php

class Eabout extends CI_Controller {
    
    public function index(){
        $is_cplogged_in = $this->session->userdata('is_cplogged_in');
        
        if(!isset($is_cplogged_in) || $is_cplogged_in != true){
            redirect('cpanel');
        }else{
            $this->load->model('about_m');
            $sent = "";
            
            if($_POST){
			///update the record////
		$data = $this->about_m->edit_about_with_images();
                $sent = $data['sent'];
	    }
            
            $this->load->view('admin_template/index', array(
                'view_name' => 'cpanel/eabout_v',
		        'about' => $this->about_m->index(),
                'sent' => $sent
            ));
        }
    }
    
}