<?php

class eportofolio extends CI_Controller {
 
    function index(){
        $this->load->model('ePortfolio_m');
        $is_cplogged_in = $this->session->userdata('is_cplogged_in');
        
        if(!isset($is_cplogged_in) || $is_cplogged_in != true){
            redirect('cpanel');
        }else{
            
            $sent = "";
	    
	    if(isset($_POST['upload'])){
		$data = $this->eaPortfolio_m->upload2();
                $sent = $data['sent'];
	    }
            
            $this->load->view('admin_template/index', array(
                'view_name' => 'cpanel/eportofolio_v',
		        'portfolio' => $this->ePortfolio_m->our_services(),
                'sent' => $sent
            ));
        }
    }
    
}