<?php

class Dproduct extends CI_Controller {
    
    function index() {
        $is_cplogged_in = $this->session->userdata('is_cplogged_in');
        
        if(!isset($is_cplogged_in) || $is_cplogged_in != true){
            redirect('cpanel');
        }else{
            $this->load->model('products_m');
            $sent = "";
                
            if(isset($_POST['send'])){
                $del_ad = $this->products_m->delete();
                $sent = "sent";
                $this->output->set_header('refresh:3; url='.site_url().'products_list');
            }
            
            $this->load->view('admin_template/index', array(
                'view_name' => 'cpanel/dproduct_v',
                'product' => $this->products_m->pull(),
                'sent' => $sent
            ));
        }
    }
}