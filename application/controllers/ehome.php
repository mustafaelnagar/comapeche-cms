<?php

class Ehome extends CI_Controller {
    
    public function index(){
        $is_cplogged_in = $this->session->userdata('is_cplogged_in');
        
        if(!isset($is_cplogged_in) || $is_cplogged_in != true){
            redirect('cpanel');
        }else{
            $this->load->model('home_m');
            $sent = "";
            
            if(isset($_POST['send'])){
		$info = array(
		    array(
			'id' => 1,
			'title' => $this->input->post('title'),
			'text' => $this->input->post('text')
		    ),
		    array(
			'id' => 2,
			'title' => $this->input->post('title2'),
			'text' => $this->input->post('text2')
		    ),
		    array(
			'id' => 3,
			'title' => $this->input->post('title3'),
			'text' => $this->input->post('text3', FALSE)
		    ),
		    array(
			'id' => 4,
			'title' => $this->input->post('title4'),
			'text' => $this->input->post('text4')
		    ),
		    array(
			'id' => 5,
			'title' => $this->input->post('title5'),
			'text' => $this->input->post('text5')
		    )
		);
		$data = $this->home_m->edit_blocks($info);
                $sent = $data['sent'];
	    }
            
            $this->load->view('admin_template/index', array(
                'view_name' => 'cpanel/ehome_v',
		'home' => $this->home_m->blocks(),
                'sent' => $sent
            ));
        }
    }
    
}