<?php

class portfolio_profile_m extends CI_Model {
    
    // ME: Getting all ads
    function get_slides($current_profile){
	
	// $query = $this->db->get('slider');
	$query = $this->db->query('select * from portfolio where `id`='."'".$current_profile."'");
        
        if($query->num_rows() > 0){
            foreach($query->result() as $row){
                $data[] = $row;
            }
            return $data;
        }
	
    }
    
    // ME: Insert new ad & uploading the pic
    function upload(){
        
        $config = array(
	    'allowed_types' => 'jpg|jpeg|gif|png',
	    'upload_path' => './images/slideshow/',
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
		'new_image' => './images/slideshow/',
		'maintain_ratio' => false,
		
		
		'width' => 510,
		'height' => 375
	    );
		
	    $this->load->library('image_lib', $config);
	    $this->image_lib->resize();
            
            // ME: Insert to database
            $info = array(
                'img' => $data['file_data']['file_name'],
                'arr' => $this->input->post('arr'),
            );
            $this->db->insert('en_slider', $info);
	}
        return $data;
    }
    
    function pull() {
        
        $this->db->where('id', $this->uri->segment(2));
        $query = $this->db->get('portfolio');
		// $query = $this->db->get('select * from portfolio where ');
        
        if($query->num_rows() > 0){
            foreach($query->result() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
    
    // ME: Update ad & uploading the pic
    function upload2(){
        
        $config = array(
	    'allowed_types' => 'jpg|jpeg|gif|png',
	    'upload_path' => './images/slideshow/',
	    'max_size' => 200000
	);

	$this->load->library('upload', $config);

	if (!$this->upload->do_upload()){
	    $data = array(
                'sent' => 'error'
            );
            
            // ME: Update the database
            $info = array(
                'arr' => $this->input->post('arr')
            );
            
	}else{
	    $data = array(
                'file_data' => $this->upload->data(),
                'sent' => 'sent'
            );
	    
	    // ME: Config for resize
            $config = array(
		'source_image' => $data['file_data']['full_path'],
		//'new_image' => './images/slideshow/',
		'new_image' => './images/portfolio/',
		'maintain_ratio' => false,
		
		'width' => 510,
		'height' => 375
	    );
		
	    $this->load->library('image_lib', $config);
	    $this->image_lib->resize();
            
            // ME: Update the database
			$imgnumber=$this->uri->segment(3);
			$img=1;
			if($imgnumber==1){$img='img';}
			if($imgnumber==2){$img='img2';}
			if($imgnumber==3){$img='img3';}
			
            $info = array(
                $img => $data['file_data']['file_name'],
                'arr' => $this->input->post('arr')
            );
	}
            
        $id = $this->uri->segment(2);
        $this->db->update('portfolio', $info, "id = $id");
            
        return $data;
    }
    
    function delete() {
	$this->db->where('id', $this->uri->segment(2));
        $query = $this->db->get('en_slider');
        
        if($query->num_rows() > 0){
            foreach($query->result() as $row){
                $data[] = $row;
            }
            $pic = $row->img;
        }
	
        $id = $this->uri->segment(2);
        $this->db->where('id', $id);
        $this->db->delete('en_slider');
	
	// unlink('images/slideshow/'.$pic);
    }
}