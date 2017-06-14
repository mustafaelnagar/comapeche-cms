<?php

class dclasses extends CI_Controller {
    
    function index() {
        $is_cplogged_in = $this->session->userdata('is_cplogged_in');
        
        if(!isset($is_cplogged_in) || $is_cplogged_in != true){
            redirect('cpanel');
        }else{
            $this->load->model('classes_m');
            $sent = "";
                
            if(isset($_POST['send'])){
                $del_ad = $this->classes_m->delete();
                $sent = "sent";
                $this->output->set_header('refresh:3; url='.site_url().'classes');
            }
            
            $this->load->view('admin_template/index', array(
                'view_name' => 'cpanel/dclasses_v',
                'classes' => $this->classes_m->pull(),
				// ,
				// 'record'=>$this->classes->get_selected_image(),
                'sent' => $sent
            ));
        }
    }
}