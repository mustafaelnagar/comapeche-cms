<?php

Class About_m extends CI_Model {
    
    function index() {
        $query = $this->db->query("SELECT * FROM about");
    
        if($query->num_rows() > 0){
            foreach($query->result_array() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
    
    /////////// Admin ////////////
    
    // ME: Update & uploading the pic
    function edit_about(){
        
            // ME: Update the database
            $info = array(
                'title' => $this->input->post('title'),
                'list_intro' => $this->input->post('list_intro'),				
                'details' => $this->input->post('details')
            );
        
		$data= $this->db->update('about', $info, "id = 1");            
        return $data;
    }
    
	
	
	
	    function get_eabout_list()  {
        $query = $this->db->query("SELECT * FROM eabout_list");
    
        if($query->num_rows() > 0){
            foreach($query->result_array() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
    
    function pull() {
        
        $this->db->where('id', $this->uri->segment(2));
        $query = $this->db->get('about');
        
        if($query->num_rows() > 0){
            foreach($query->result_array() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
	///////////////////////////////////////////////////////////////////******************///////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////******************///////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////******************///////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////******************///////////////////////////////////////////////////////////////
    
    function edit_about_with_images(){
        
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
                'title' => $this->input->post('title'),
                'list_intro' => $this->input->post('list_intro'),				
                'details' => $this->input->post('details')
            );
        
		// $data= $this->db->update('about', $info, "id = 1"); 
            
	}else{
	    $data = array(
                'file_data' => $this->upload->data(),
                'sent' => 'sent'
            );
	    
	    // ME: Config for resize
            $config = array(
		'source_image' => $data['file_data']['full_path'],
		'new_image' => './images/img/',
		'maintain_ratio' => false,
		'width' => 650,
		'height' => 380
	    );
		
	    $this->load->library('image_lib', $config);
	    $this->image_lib->resize();
            
            // ME: Update the database
                $info = array(
                'title' => $this->input->post('title'),
                'list_intro' => $this->input->post('list_intro'),				
                'details' => $this->input->post('details'), 
				'img'=>"images/img/".$data['file_data']['file_name']
            );
        
	
	}
        	$data= $this->db->update('about', $info, "id = 1"); 
	 
       
         
        return $data;
    }
    
	
	
	//////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////
	
	  
    function edit_about_list($info){
 
 
	    $this->db->update_batch('eabout_list', $info, 'id');
        $data = array(
            'sent' => "sent"
        );
    
        
        
        // $this->db->update('eabout_list', $info );
            
        return $data;
    }
    
	//////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////
	
	
	
	
}