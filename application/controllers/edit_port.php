<?php

class Edit_port extends CI_Controller {
    
    public function index(){
		   $this->load->model('portfolio_add_m');
        $is_cplogged_in = $this->session->userdata('is_cplogged_in');
        
        if(!isset($is_cplogged_in) || $is_cplogged_in != true){
            redirect('cpanel');
        }else{
            // $this->load->model('services_m');
			$this->load->model('edit_port_m');
            $sent = "";
	    
	    if(isset($_POST['upload'])){
		$data = $this->edit_port_m->upload3();
                $sent = $data['sent'];
	    }
            
            $this->load->view('admin_template/index', array(
                'view_name' => 'cpanel/edit_port_v',
		        'portfolio' => $this->edit_port_m->pull(),
				  'classes'=>$this->portfolio_add_m->get_classes(),
                'sent' => $sent
            ));
        }
    }
	
	
	function upload3(){
		   $this->load->model('portfolio_add_m');
	   $is_cplogged_in = $this->session->userdata('is_cplogged_in');
        
        if(!isset($is_cplogged_in) || $is_cplogged_in != true){
            redirect('cpanel');
        }else{
            $this->load->model('portf_m');
			$this->load->model('edit_port_m_upload');
			$this->load->model('edit_port_m');
            $sent = "";
	    
	    if(isset($_POST['upload'])){
		$data = $this->edit_port_m_upload->upload3();
                $sent = $data['sent'];
	    }
            
            $this->load->view('admin_template/index', array(
                'view_name' => 'cpanel/edit_port_v',
		        'portfolio' => $this->edit_port_m->pull(),
				  'classes'=>$this->portfolio_add_m->get_classes(),
                'sent' => $sent
            ));
        }
	}
    
}