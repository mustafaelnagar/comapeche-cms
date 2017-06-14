<?php

class dquote extends CI_Controller {
    
    function index() {
        $is_cplogged_in = $this->session->userdata('is_cplogged_in');
        
        if(!isset($is_cplogged_in) || $is_cplogged_in != true){
            redirect('cpanel');
        }else{
            $this->load->model('testmonials_m');
            $sent = "";
                
            if($_POST){
                $del_ad = $this->testmonials_m->delete();
                $sent = "sent";
                $this->output->set_header('refresh:3; url='.site_url().'testmonials');
            }
            
            $this->load->view('admin_template/index', array(
                'view_name' => 'cpanel/dqutoe_v',
                'banner' => $this->testmonials_m->pull(),
                'sent' => $sent
            ));
        }
    }
}