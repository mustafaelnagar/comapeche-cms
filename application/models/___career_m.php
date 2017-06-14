<?php

Class Career_m extends CI_Model {
    
    function index() {
        $query = $this->db->query("SELECT * FROM career");
    
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
                array(
                    'id' => 1,
                    'title' => $this->input->post('title'),
                    'details' => $this->input->post('details')
                ),
                array(
                    'id' => 2,
                    'title' => 'mail',
                    'details' => $this->input->post('email')
                )
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
		'width' => 450,
		'height' => 350
	    );
		
	    $this->load->library('image_lib', $config);
	    $this->image_lib->resize();
            
            // ME: Update the database
            $info = array(
                array(
                    'id' => 1,
                    'img' => $data['file_data']['file_name'],
                    'title' => $this->input->post('title'),
                    'details' => $this->input->post('details')
                ),
                array(
                    'id' => 2,
                    'img' => 'no image',
                    'title' => 'mail',
                    'details' => $this->input->post('email')
                )
            );
	}
            
        $this->db->update_batch('career', $info, "id");
            
        return $data;
    }
    
}