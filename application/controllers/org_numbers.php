<?php

class org_numbers extends CI_Controller {
    
    public function index(){
        $is_cplogged_in = $this->session->userdata('is_cplogged_in');
        
        if(!isset($is_cplogged_in) || $is_cplogged_in != true){
            redirect('cpanel');
        }else{
            $this->load->model('org_numbers_m');
            $sent = "";
            
            if($_POST){
			///get the batch data & update the record////
		           
		$info = array(
		    array(
			'id' => 1,
			'name' => $this->input->post('headline'),
			
		    ),
		    array(
			'id' => 2,
			'name' => $this->input->post('name1'),
			'nu' => $this->input->post('no1')
		    )
			
			,
		    array(
			'id' => 3,
			'name' => $this->input->post('name2'),
			'nu' => $this->input->post('no2')
		    ),
		    array(
			'id'   => 4,
			'name' => $this->input->post('name3'),
			'nu'   => $this->input->post('no3'),
		    ),
		    array(
			'id'   => 5,
			'name' => $this->input->post('name4'),
			'nu'   => $this->input->post('no4'),
		    ) 
			);
		$data = $this->org_numbers_m->update_org_numbers($info);
                $sent = $data['sent'];
				   }
				   
            
            $this->load->view('admin_template/index', array(
                'view_name' => 'cpanel/org_numbers_v',
		        'data' => $this->org_numbers_m->index(),
                'sent' => $sent
            ));
        }
    }
    
}