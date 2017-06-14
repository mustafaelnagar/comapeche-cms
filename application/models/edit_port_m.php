
<?php
/*connect to the databas eand get the servies data */
Class Edit_port_m extends CI_Model {
    
    function index() {
        $query = $this->db->query("SELECT * FROM portfolio");
    
        if($query->num_rows() > 0){
            foreach($query->result_array() as $row){
                $data[] = $row;
            }
            return $data;
        }
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
        // echo "here am at upload 3 what we have to post . <br/>";
		
		
			/** prepare for image upload **/
        $config = array(
	    'allowed_types' => 'jpg|jpeg|gif|png',
	    'upload_path' => './images/portfolio/',
	    'max_size' => 200000
	);

	$this->load->library('upload', $config);
		 $data = array(
                'file_data' => $this->upload->data(),
                'sent' => 'sent'
            );
			
		$imgpath=$data['file_data']['full_path'];
		 
		 
		 
	$order=  $this->input->post('arr');
	$title= $this->input->post('title');
	$desc=$this->input->post('details');	
    $img1=$this->input->post('img1');
	$pclass=$this->input->post('pclass');
	 

	if (!$this->upload->do_upload()){
	    $data = array(
                'sent' => 'sent'
            );
            
          $info = array(
                // 'img' => $data['file_data']['file_name'],
                'arr' => $order,
                'name' =>$title,
				'class' =>$pclass,
                'desc' => $desc
            );
            
	}else{
	    $data = array(
                'file_data' => $this->upload->data(),
                'sent' => 'sent'
            );
	    
	    // ME: Config for resize
		
		
		$imgpath=$data['file_data']['full_path'];
		 // echo "<h1>the path is $imgpath</h1>";
            $config = array(
		'source_image' => $imgpath,
		'new_image' => './images/portfolio/',
		'maintain_ratio' => false,
		'width' => 510,
		'height' => 375 
	    );
		
	    $this->load->library('image_lib', $config);
	    $this->image_lib->resize();
            
            $info = array(
                'img' => $imgpath,
                'arr' => $order,
                'name' =>$title,
				'class' =>$pclass,
                'desc' => $desc
            );
			
	}
    

			//update
        $id = $this->uri->segment(2);	   
        $this->db->update('portfolio', $info, "id = $id");
            
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
    
}