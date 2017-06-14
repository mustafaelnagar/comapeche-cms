<?php

class site_meta extends CI_Controller {
    
    public function index(){
        $is_cplogged_in = $this->session->userdata('is_cplogged_in');
        
        if(!isset($is_cplogged_in) || $is_cplogged_in != true){
            redirect('cpanel');
        }else{
            $this->load->model('site_meta_m');
            $sent = "";
            
            // if(isset($_POST['upload'])){
			if(isset($_POST)){
	     	$data = $this->site_meta_m->update_meta();
                $sent = $data['sent'];
	    }
            
            $this->load->view('admin_template/index', array(
                'view_name' => 'cpanel/site_meta_v',
		        'site_meta' => $this->site_meta_m->index(),
                'sent' => $sent
            ));
        }
    }
    
}