<?php

class edit_best_three extends CI_Controller {
    
    function index() {
        $is_cplogged_in = $this->session->userdata('is_cplogged_in');
        
        if(!isset($is_cplogged_in) || $is_cplogged_in != true){
            redirect('cpanel');
        }else{
            $this->load->model('best_three_m');
            $sent = "";
            
            if($_POST){
		$data = $this->best_three_m->update_product();
                $sent = $data['sent'];
	    }
            
            $this->load->view('admin_template/index', array(
                'view_name' => 'cpanel/ebest_three_v',
                'three' => $this->best_three_m->pull(),
                'sent' => $sent
            ));
        }
    }
}