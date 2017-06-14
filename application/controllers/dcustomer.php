<?php

class Dcustomer extends CI_Controller {
    
    function index() {
        $is_cplogged_in = $this->session->userdata('is_cplogged_in');
        
        if(!isset($is_cplogged_in) || $is_cplogged_in != true){
            redirect('cpanel');
        }else{
            $this->load->model('customers_m');
            $sent = "";
                
            if(isset($_POST['send'])){
                $del_ad = $this->customers_m->delete();
                $sent = "sent";
                $this->output->set_header('refresh:3; url='.site_url().'customers');
            }
            
            $this->load->view('admin_template/index', array(
                'view_name' => 'cpanel/dcustomer_v',
                'customer' => $this->customers_m->pull(),
                'sent' => $sent
            ));
        }
    }
}