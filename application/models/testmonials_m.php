<?php

class testmonials_m extends CI_Model {
    
    // ME: Getting all ads
    function get_testmonials(){
	
	// $query = $this->db->get('slider');
	$query = $this->db->query('select * from testmonials ORDER BY arr');
        
        if($query->num_rows() > 0){
            foreach($query->result_array() as $row){
                $data[] = $row;
            }
            return $data;
        }
	
    }
    
    
    // ME: Insert new ad & uploading the pic
    function add_new_testmonial(){
        
        $config = array(
	    'allowed_types' => 'jpg|jpeg|gif|png',
	    'upload_path' => './images/testmonial/',
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
		'new_image' => './images/testmonial/',
			'maintain_ratio' => false,
		'width' => 70,
		'height' => 70
	    );
		
	    $this->load->library('image_lib', $config);
	    $this->image_lib->resize();
            
            // ME: Insert to database
            $info = array(
                'img' => "images/testmonial/".$data['file_data']['file_name'],
                'arr' => $this->input->post('arr'),
				 'auther' => $this->input->post('auther'),
				  'qutoe' => $this->input->post('qt'),
			 
            );
            $this->db->insert('testmonials', $info);
	}
        return $data;
    }
    
    function pull() {
        
        $this->db->where('id', $this->uri->segment(2));
        $query = $this->db->get('testmonials');
        
        if($query->num_rows() > 0){
            foreach($query->result() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
    
    // ME: Update ad & uploading the pic
    function update_testmonials(){
        
        $config = array(
	    'allowed_types' => 'jpg|jpeg|gif|png',
	    'upload_path' => './images/testmonial/',
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
				'transition' => $this->input->post('transition'),
				'dir' => $this->input->post('dir')
            
            );
            
	}else{
	    $data = array(
                'file_data' => $this->upload->data(),
                'sent' => 'sent'
            );
	    
	    // ME: Config for resize
            $config = array(
		'source_image' => $data['file_data']['full_path'],
		'new_image' => './images/testmonials/',
		'maintain_ratio' => false,
				 
		'width' => 70,
		'height' => 70
	    );
		
	    $this->load->library('image_lib', $config);
	    $this->image_lib->resize();
            
            // ME: Update the database
            $info = array(
                'img' => $data['file_data']['file_name'],
                'arr' => $this->input->post('arr'),
				'transition' => $this->input->post('transition'),
				'dir' => $this->input->post('dir')
            );
	}
            
        $id = $this->uri->segment(2);
        $this->db->update('slider', $info, "id = $id");
            
        return $data;
    }
    
    function delete() {
	    $this->db->where('id', $this->uri->segment(2));
        $query = $this->db->get('testmonials');
        
        if($query->num_rows() > 0){
            foreach($query->result() as $row){
                $data[] = $row;
            }
            $pic = $row->img;
        }
	
        $id = $this->uri->segment(2);
        $this->db->where('id', $id);
        $this->db->delete('testmonials');
	
	// unlink('images/slideshow/'.$pic);
    }
}