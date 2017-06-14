<?php

class Econtacts extends CI_Controller {
    
    public function index(){
        $is_cplogged_in = $this->session->userdata('is_cplogged_in');
        
        if(!isset($is_cplogged_in) || $is_cplogged_in != true){
            redirect('cpanel');
        }else{
            $this->load->model('contacts_m');
            $sent = "";
            
            if(isset($_POST['upload'])){
	     	$data = $this->contacts_m->upload();
                $sent = $data['sent'];
	    }
            
            $this->load->view('admin_template/index', array(
                'view_name' => 'cpanel/econtacts_v',
		'contacts' => $this->contacts_m->index(),
                'sent' => $sent
            ));
        }
    }
    
}