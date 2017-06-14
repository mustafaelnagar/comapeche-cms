<?php

class dlogos extends CI_Controller {
    
    function index() {
        $is_cplogged_in = $this->session->userdata('is_cplogged_in');
        
        if(!isset($is_cplogged_in) || $is_cplogged_in != true){
            redirect('cpanel');
        }else{
            $this->load->model('logos_m');
            $sent = "";
                
            if(isset($_POST['send'])){
                $del_ad = $this->logos_m->delete();
                $sent = "sent";
                $this->output->set_header('refresh:3; url='.site_url().'logos');
            }
            
            $this->load->view('admin_template/index', array(
                'view_name' => 'cpanel/dlogos_v',
                'service' => $this->logos_m->pull(),
				'record'=>$this->logos_m->get_selected_image(),
                'sent' => $sent
            ));
        }
    }
}