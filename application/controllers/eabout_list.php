<?php

class eabout_list extends CI_Controller {
    
    public function index(){
        $is_cplogged_in = $this->session->userdata('is_cplogged_in');
        
        if(!isset($is_cplogged_in) || $is_cplogged_in != true){
            redirect('cpanel');
        }else{
            $this->load->model('about_m');
            $sent = "";
            
            if($_POST){
		$info = array(
		    array(
			'id' => 1,
			'title' => $this->input->post('list1'),
	 
		    ),
		    array(
			'id' => 2,
			'title' => $this->input->post('list2'),
		 
		    ),
		    array(
			'id' => 3,
			'title' => $this->input->post('list3'),
		 
		    ),
		    array(
			'id' => 4,
			'title' => $this->input->post('list4'),
		 
		    )
			,
		    array(
			'id' => 5,
			'title' => $this->input->post('list5'),
			 
		    )
		);
		$data = $this->about_m->edit_about_list($info);
                $sent = $data['sent'];
	    }
            
            $this->load->view('admin_template/index', array(
                'view_name' => 'cpanel/eabout_list_v',
	         	'about' => $this->about_m->get_eabout_list(),#about list
                'sent' => $sent
            ));
        }
    }
    
}