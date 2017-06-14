<?php

class Social extends CI_Controller {
    
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
			'url' => $this->input->post('url')
		    ),
		    array(
			'id' => 2,
			'title' => $this->input->post('title2'),
			'url' => $this->input->post('url2')
		    ),
		    array(
			'id' => 3,
			'title' => $this->input->post('title3'),
			'url' => $this->input->post('url3')
		    ),
		    array(
			'id' => 4,
			'title' => $this->input->post('title4'),
			'url' => $this->input->post('url4')
		    )
			// ,
		    // array(
			// 'id' => 5,
			// 'title' => $this->input->post('title5'),
			// 'url' => $this->input->post('url5')
		    // )
		);
		$data = $this->home_m->edit_social($info);
                $sent = $data['sent'];
	    }
            
            $this->load->view('admin_template/index', array(
                'view_name' => 'cpanel/social_v',
	         	'social' => $this->home_m->social(),
                'sent' => $sent
            ));
        }
    }
    
}