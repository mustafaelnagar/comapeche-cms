<?php

Class EPortfolio_m extends CI_Model {
    function __construct(){
	parent::__construct();
	$this->our_services();
	}
    function index() {
        // $query = $this->db->query("SELECT * FROM services_main");
		$query = $this->db->query("SELECT * FROM en_services");
    
        if($query->num_rows() > 0){
            foreach($query->result_array() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
    
    function our_services() {
        $query = $this->db->query("SELECT * FROM portfolio ORDER BY arr ASC");
    
        if($query->num_rows() > 0){
            foreach($query->result_array() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
    
    /////////// Admin ////////////
    
    // ME: Update & uploading the pic
    function upload(){
        
        $config = array(
	    'allowed_types' => 'jpg|jpeg|gif|png',
	    'upload_path' => './images/',
	    'max_size' => 200000
	);

	$this->load->library('upload', $config);

	if (!$this->upload->do_upload()){
	    $data = array(
                'sent' => 'error'
            );
            
            // ME: Update the database
            $info = array(
                'title' => $this->input->post('title'),
                'details' => $this->input->post('details')
            );
            
	}else{
	    $data = array(
                'file_data' => $this->upload->data(),
                'sent' => 'sent'
            );
	    
	    // ME: Config for resize
            $config = array(
		'source_image' => $data['file_data']['full_path'],
		'new_image' => './images/',
		'maintain_ratio' => true,
		'width' => 600,
		'height' => 500
	    );
		
	    $this->load->library('image_lib', $config);
	    $this->image_lib->resize();
            
            // ME: Update the database
            $info = array(
                'img' => $data['file_data']['file_name'],
                'title' => $this->input->post('title'),
                'details' => $this->input->post('details')
            );
	}
            
        $this->db->update('services_main', $info, "id = 1");
            
        return $data;
    }
    
    // ME: Insert new service & uploading the pic
    function upload2(){
        
        $config = array(
	    'allowed_types' => 'jpg|jpeg|gif|png',
	    'upload_path' => './images/img/',
	    'max_size' => 200000
	);

	$this->load->library('upload', $config);

	if (!$this->upload->do_upload()){
	    
	    $data = array(
                'sent' => 'error'
            );
	    
	}else{
	    
	    $data = array(
                'file_data' => $this->upload->data(),
                'sent' => 'sent'
            );
	    
	    // ME: Config for resize
            $config = array(
		'source_image' => $data['file_data']['full_path'],
		'new_image' => './images/img/',
		'maintain_ratio' => true,
		'width' => 290,
		'height' => 210
	    );
		
	    $this->load->library('image_lib', $config);
	    $this->image_lib->resize();
            
            // ME: Insert to database
            $info = array(
                'img' => $data['file_data']['file_name'],
                'arr' => $this->input->post('arr'),
                'title' => $this->input->post('title'),
                'details' => $this->input->post('details'),
                'img_pos' => $this->input->post('img_pos')
            );
            $this->db->insert('en_services', $info);
	}
        return $data;
    }
    
    function pull() {
        
        $this->db->where('id', $this->uri->segment(2));
        $query = $this->db->get('portfolio');
        
        if($query->num_rows() > 0){
            foreach($query->result_array() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
    
    function upload3(){
        
        $config = array(
	    'allowed_types' => 'jpg|jpeg|gif|png',
	    'upload_path' => './images/img/',
	    'max_size' => 200000
	);

	$this->load->library('upload', $config);

	if (!$this->upload->do_upload()){
	    $data = array(
                'sent' => 'error'
            );
            
            // ME: Update the database
            $info = array(
                'arr' => $this->input->post('arr'),
                'title' => $this->input->post('title'),
                'img_pos' => $this->input->post('img_pos'),
                'details' => $this->input->post('details')
            );
            
	}else{
	    $data = array(
                'file_data' => $this->upload->data(),
                'sent' => 'sent'
            );
	    
	    // ME: Config for resize
            $config = array(
		'source_image' => $data['file_data']['full_path'],
		'new_image' => './images/img/',
		'maintain_ratio' => true,
		'width' => 290,
		'height' => 210
	    );
		
	    $this->load->library('image_lib', $config);
	    $this->image_lib->resize();
            
            // ME: Update the database
            $info = array(
                'img' => $data['file_data']['file_name'],
                'arr' => $this->input->post('arr'),
                'title' => $this->input->post('title'),
                'img_pos' => $this->input->post('img_pos'),
                'details' => $this->input->post('details')
            );
	}
        
        $id = $this->uri->segment(2);
        $this->db->update('en_services', $info, "id = $id");
            
        return $data;
    }
    
    function delete() {
	$this->db->where('id', $this->uri->segment(2));
        $query = $this->db->get('portfolio');
        
        if($query->num_rows() > 0){
            foreach($query->result() as $row){
                $data[] = $row;
            }
            $pic = $row->img;
        }
	
        $id = $this->uri->segment(2);
        $this->db->where('id', $id);
        $this->db->delete('portfolio');
	
	// unlink('images/img/'.$pic);
    }
 //#Mustafa
function addservice() {
echo "adding ";
}
}