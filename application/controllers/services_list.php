<?php

class Services_list extends CI_Controller {
    function __construct(){
       parent::__construct();
	   $this->load->model('services_m');
	$this->load->model('home_m');	//for the social
	}
    public function index(){
        $is_cplogged_in = $this->session->userdata('is_cplogged_in');
        
        if(!isset($is_cplogged_in) || $is_cplogged_in != true){
            redirect('cpanel');
        }else{
            
            $sent = "";
	    }
	    if(isset($_POST['upload'])){
		$data = $this->services_m->upload2();
                $sent = $data['sent'];
	    }
            
            $this->load->view('admin_template/index', array(
                'view_name' => 'cpanel/services_list_v',
		        'service' => $this->services_m->our_services(),
				'social'=>$this->home_m->social(),
                'sent' => $sent
            ));
        }
    }
    
