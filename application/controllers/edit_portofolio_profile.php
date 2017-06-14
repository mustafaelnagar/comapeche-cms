<?php

class edit_portofolio_profile extends CI_Controller {
    
    function index() {
        $is_cplogged_in = $this->session->userdata('is_cplogged_in');
        
        if(!isset($is_cplogged_in) || $is_cplogged_in != true){
            redirect('cpanel');
        }else{
            // $this->load->model('banner_m');
			 $this->load->model('portfolio_profile_m');
            $sent = "";
            
            if(isset($_POST['upload'])){
		$data = $this->portfolio_profile_m->upload2();
                $sent = $data['sent'];
	    }
            
            $this->load->view('admin_template/index', array(
                'view_name' => 'cpanel/edit_portfolio_profile_img',
                'banner' => $this->portfolio_profile_m->pull(),
                'sent' => $sent,
				'imgnumber'=>$this->uri->segment(3)
            ));
        }
    }
}