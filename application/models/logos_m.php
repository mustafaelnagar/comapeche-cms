<?php

Class logos_m extends CI_Model {
    
    function index() {
        $query = $this->db->query("SELECT * FROM logos");
    
        if($query->num_rows() > 0){
            foreach($query->result_array() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
    
	function get_logos(){
	$query = $this->db->query("SELECT * FROM logos ");
    
        if($query->num_rows() > 0){
            foreach($query->result() as $row){
                $data[] = $row;
            }
            return $data;
        }
	}
	
    function our_services() {
        $query = $this->db->query("SELECT * FROM logos ORDER BY arr ASC");
    
        if($query->num_rows() > 0){
            foreach($query->result() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
    
    /////////// Admin ////////////
    
    // ME: Update & uploading the pic
    function update_logo(){
        
        $config = array(
	    'allowed_types' => 'jpg|jpeg|gif|png',
	    'upload_path' => './images/logos/',
	    'max_size' => 200000
	);

	$this->load->library('upload', $config);

	if (!$this->upload->do_upload()){
	    $data = array(
                'sent' => 'error'
            );
            
            // ME: Update the database
            $info = array(
           'logo_url' => $this->input->post('title') );
            
	}else{
	    $data = array(
                'file_data' => $this->upload->data(),
                'sent' => 'sent'
            );
	    
	    // ME: Config for resize
            $config = array(
		'source_image' => $data['file_data']['full_path'],
		'new_image' => './images/logos',
		'maintain_ratio' => false,
		'width' =>140,
		'height' => 95
	    );
		
	    $this->load->library('image_lib', $config);
	    $this->image_lib->resize();
            
            // ME: Update the database
            $info = array(
                'logo' => "images/logos/".$data['file_data']['file_name'],
                'logo_url' => $this->input->post('title')
				// ,
                // 'details' => $this->input->post('details')
            );
	}
    $id=$this->uri->segment(2);        
        $this->db->update('logos', $info, "id = $id");
            
        return $data;
    }
    
	
    // ME: Insert new service & uploading the pic
    function upload2(){
        
        $config = array(
	    'allowed_types' => 'jpg|jpeg|gif|png',
	    'upload_path' => './images/logos/',
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
		'new_image' => './images/logos/',
	'maintain_ratio' => false,
		 'width' =>140,
		'height' => 95
		);
		
	    $this->load->library('image_lib', $config);
	    $this->image_lib->resize();
            
            // ME: Insert to database
            $info = array(
                'logo' => "images/logos/".$data['file_data']['file_name'],
                'arr' => $this->input->post('arr'),
                'logo_url' => $this->input->post('title')
                // 'details' => $this->input->post('details'),
                // 'img_pos' => $this->input->post('img_pos')
            );
            $this->db->insert('logos', $info);
	}
        return $data;
    }
    
    function pull() {
        
        $this->db->where('id', $this->uri->segment(2));
        $query = $this->db->get('logos');
        
        if($query->num_rows() > 0){
            foreach($query->result_array() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
    
 
    function delete() {
	$this->db->where('id', $this->uri->segment(2));
        $query = $this->db->get('logos');
        
        if($query->num_rows() > 0){
            foreach($query->result() as $row){
                $data[] = $row;
            }
            // $pic = $row->img;
        }
	
        $id = $this->uri->segment(2);
        $this->db->where('id', $id);
        $this->db->delete('logos');
	
	// unlink('images/clients/'.$pic);
    }
    
	function  get_selected_image(){
	 $id=$this->uri->segment(2);
	 $query = $this->db->query("SELECT * FROM logos where `id`=$id");
	    if($query->num_rows() > 0){
            foreach($query->result() as $row){
                $data[] = $row;
            }
            return $data;
        }
	 
	 
	 
	 }
}