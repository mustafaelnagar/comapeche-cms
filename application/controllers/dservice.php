<?php

class Dservice extends CI_Controller {
    
    function index() {
        $is_cplogged_in = $this->session->userdata('is_cplogged_in');
        
        if(!isset($is_cplogged_in) || $is_cplogged_in != true){
            redirect('cpanel');
        }else{
            $this->load->model('services_m');
            $sent = "";
                
            if(isset($_POST['send'])){
                $del_ad = $this->services_m->delete();
                $sent = "sent";
                $this->output->set_header('refresh:3; url='.site_url().'services_list');
            }
            
            $this->load->view('admin_template/index', array(
                'view_name' => 'cpanel/dservice_v',
                'service' => $this->services_m->pull(),
                'sent' => $sent
            ));
        }
    }
}