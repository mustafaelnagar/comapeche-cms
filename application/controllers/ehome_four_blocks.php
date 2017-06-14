<?php

class ehome_four_blocks extends CI_Controller {
    
    public function index(){
        $is_cplogged_in = $this->session->userdata('is_cplogged_in');
        
        if(!isset($is_cplogged_in) || $is_cplogged_in != true){
            redirect('cpanel');
        }else{
            $this->load->model('ehome_four_blocs_m');
            $sent = "";
            
            if($_POST){
		$info = array(
		    array(
			'id' => 1,
			'block_name' => $this->input->post('title'),
			// 'block_notes' => $this->input->post('text'),
			'block_url' => $this->input->post('url1')
		    ),
		    array(
			'id' => 2,
			'block_name' => $this->input->post('title2'),
			// 'block_notes' => $this->input->post('text2'),
			'block_url' => $this->input->post('url2')
		    ),
		    array(
			'id' => 3,
			'block_name' => $this->input->post('title3'),
			// 'block_notes' => $this->input->post('text3', FALSE),
			'block_url' => $this->input->post('url3')
		    ),
		    array(
			'id' => 4,
			'block_name' => $this->input->post('title4'),
			// 'block_notes' => $this->input->post('text4'),
			'block_url' => $this->input->post('url4')
		    )
			
		);
		$data = $this->ehome_four_blocs_m->edit_blocks($info);
                $sent = $data['sent'];
	    }
            
            $this->load->view('admin_template/index', array(
                'view_name' => 'cpanel/ehome_four_blocs_v',
		         'home' => $this->ehome_four_blocs_m->blocks(),
                 'sent' => $sent
            ));
        }
    }
    
}