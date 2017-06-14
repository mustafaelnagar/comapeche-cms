<?php

Class brands_m extends CI_Model {
    
    function index() {
        $query = $this->db->query("SELECT * FROM logos ORDER BY `arr` ASC");
    
        if($query->num_rows() > 0){
            foreach($query->result_array() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
    
 
    function get_brands() {
        $query = $this->db->query("SELECT * 
FROM  `brands` 
ORDER BY  `brands`.`arr` ASC ");
    
        if($query->num_rows() > 0){
            foreach($query->result() as $row){
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
	    'upload_path' => './images/clients/',
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
		'new_image' => './images/clients',
		'maintain_ratio' => false,
		'width' => 165,
		'height' => 165
	    );
		
	    $this->load->library('image_lib', $config);
	    $this->image_lib->resize();
            
            // ME: Update the database
            $info = array(
                'logo' => $data['file_data']['file_name'],
                'url' => $this->input->post('title')
				// ,
                // 'details' => $this->input->post('details')
            );
	}
            
        $this->db->update('logos', $info, "id = 1");
            
        return $data;
    }
    
    // ME: Insert new service & uploading the pic
    function upload2(){
        
        $config = array(
	    'allowed_types' => 'jpg|jpeg|gif|png',
	    'upload_path' => './images/clients/',
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
		'new_image' => './images/clients/',
		'maintain_ratio' => false,
		'width' => 165,
		'height' => 165
	    );
		
	    $this->load->library('image_lib', $config);
	    $this->image_lib->resize();
            
            // ME: Insert to database
            $info = array(
                'logo' => $data['file_data']['file_name'],
                'arr' => $this->input->post('arr'),
                'logo_url' => $this->input->post('title')
                // 'details' => $this->input->post('details'),
                // 'img_pos' => $this->input->post('img_pos')
            );
            $this->db->insert('brands', $info);
	}
        return $data;
    }
    
    function pull() {
        
        $this->db->where('id', $this->uri->segment(2));
        $query = $this->db->get('brands');
        
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
	    'upload_path' => './images/clients/',
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
                'logo_url' => $this->input->post('title')
				// ,
                // 'img_pos' => $this->input->post('img_pos'),
                // 'details' => $this->input->post('details')
            );
            
	}else{
	    $data = array(
                'file_data' => $this->upload->data(),
                'sent' => 'sent'
            );
	    
	    // ME: Config for resize
            $config = array(
		'source_image' => $data['file_data']['full_path'],
		'new_image' => './images/clients/',
		'maintain_ratio' => false,
		'width' => 165,
		'height' => 165
	    );
		
	    $this->load->library('image_lib', $config);
	    $this->image_lib->resize();
            
            // ME: Update the database
            $info = array(
                'img' => $data['file_data']['file_name'],
                'arr' => $this->input->post('arr'),
                // 'logo_url' => $this->input->post('title')
				// ,
                // 'img_pos' => $this->input->post('img_pos'),
                // 'details' => $this->input->post('details')
            );
	}
        
        $id = $this->uri->segment(2);
        $this->db->update('brands', $info, "id = $id");
            
        return $data;
    }
    
    function delete() {
	$this->db->where('id', $this->uri->segment(2));
        $query = $this->db->get('brands');
        
        if($query->num_rows() > 0){
            foreach($query->result() as $row){
                $data[] = $row;
            }
            // $pic = $row->img;
        }
	
        $id = $this->uri->segment(2);
        $this->db->where('id', $id);
        $this->db->delete('brands');
	
	// unlink('images/clients/'.$pic);
    }
    
}