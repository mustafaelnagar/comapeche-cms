<?php

class Eportofolio_list_add_new extends CI_Controller {
    function __construct(){
       parent::__construct();
	   // $this->load->model('services  ');
	   $this->load->model('portfolio_add_m');
	   
	}
    public function index(){
        $is_cplogged_in = $this->session->userdata('is_cplogged_in');
        
        if(!isset($is_cplogged_in) || $is_cplogged_in != true){
            redirect('cpanel');
        }else{
            
            $sent = "";
	    
	    if($_POST){
		$data = $this->portfolio_add_m->upload2();
		// $sent = $this->portfolio_add_m->addservice();
                // $sent = $data['sent'];
	    // }
            
            $this->load->view('admin_template/index', array(
                
				'view_name' => 'cpanel/portfolio_list_add_new_v',
		        'classes'=>$this->portfolio_add_m->get_classes(),
                 'sent' => $sent
            ));
        }else{
		    $this->load->view('admin_template/index', array(
                'view_name' => 'cpanel/portfolio_list_add_new_v',
		        'classes'=>$this->portfolio_add_m->get_classes(),
                 'sent' => $sent
		));
		}
    }
    
}
}