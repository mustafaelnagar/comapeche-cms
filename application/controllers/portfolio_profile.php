<?php

class portfolio_profile extends CI_Controller {
    
    public function index(){
        $is_cplogged_in = $this->session->userdata('is_cplogged_in');
        
        if(!isset($is_cplogged_in) || $is_cplogged_in != true){
            redirect('cpanel');
        }else{
            // $this->load->model('banner_m');
			  $this->load->model('portfolio_profile_m');
            $sent = "";
            
            if(isset($_POST['upload'])){
		$data = $this->portfolio_profile_m->upload();
                $sent = $data['sent'];
	    }
            //get the current portfolio id 
			$current_profile=$this->uri->segment(2);
            $this->load->view('admin_template/index', array(
                'view_name' => 'cpanel/portfolio_profile_v',
		        'portofilio_record' => $this->portfolio_profile_m->get_slides($current_profile),
                'sent' => $sent
            ));
        }
    }
    
}