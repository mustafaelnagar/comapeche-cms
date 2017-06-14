<?php
/*connect to the databas eand get the servies data */



Class portfolio_add_m extends CI_Model {
    
 
    // ME: Update & uploading the pic
   
    // ME: Insert new service & uploading the pic
    function upload2(){
	

        $config = array(
	    'allowed_types' => 'jpg|jpeg|gif|png',
	    'upload_path' => './images/portfolio/',
		// images/
	    'max_size' => 200000,
		 
		'maintain_ratio' =>false,
		'width' => 510,
		'height' => 375
	);

	$this->load->library('upload', $config);
	  // $this->load->library('image_lib', $config);
    // $this->image_lib->resize();
	
	
	if (!$this->upload->do_upload()){
	    
	    $data = array(
                'sent' => 'error'
            );
// echo $this->upload->display_errors();//debugging  why upload failed 
			
	}
	else{
	
	//////////////////////////////<<img 1 >>///////////////////////////////////////////
	
	    $data = array(
                'file_data' => $this->upload->data(),
                'sent' => 'sent'
            );
	    
		  // ME: Config for resize img 1 
            $config = array(
		'source_image' => $data['file_data']['full_path'],
		
		'new_image' => './images/portfolio/',
		
		'maintain_ratio' =>false,
		'width' => 510,
		'height' => 375
	    );
		 $this->load->library('image_lib', $config);
	    $this->image_lib->resize();
		 $this->image_lib->clear();
	//////////////////////////////<<img 2 >>///////////////////////////////////////////	
         //here I need to upload the second image with the same config of the first 
         $field_name2 = "userfile2";
         $this->upload->do_upload($field_name2);
	
	    $data_img2 = array(
                'file_data' => $this->upload->data(),
                'sent' => 'sent'
            );

		 // ME: Config for resize img 3
$config2=Array();
		 $config2 = array(
		'source_image' => $data_img2['file_data']['full_path'],
		
		'new_image' => './images/portfolio/',
	
		'maintain_ratio' =>false,
		'width' => 510,
		'height' => 375
	    );   		
		$this->image_lib->initialize($config2); 
		  // $this->load->library('image_lib', $config);
	    $this->image_lib->resize();
		 $this->image_lib->clear();
		//////////////////////////////<<img 3 >>///////////////////////////////////////////		
//here I need to upload the second image with the same config of the first 
$field_name3 = "userfile3";
$this->upload->do_upload($field_name3);
	
	    $data_img3 = array(
                'file_data' => $this->upload->data(),
                'sent' => 'sent'
            );
	
		 // ME: Config for resize img 3
		     $config3 = Array();
            $config3 = array(
		'source_image' => $data_img3['file_data']['full_path'],
		'new_image' => './images/portfolio/',
		
		'maintain_ratio' =>false,
		'width' => 510,
		'height' => 375
	    );
	$this->image_lib->initialize($config3); 
		  $this->load->library('image_lib', $config);
	    $this->image_lib->resize();
    
  $this->image_lib->clear();
 
            // ME: Insert to database
            $info = array(
                'img' => $data['file_data']['file_name'],
				'img2' => $data_img2['file_data']['file_name'],
				'img3' => $data_img3['file_data']['file_name'],
                'arr' => $this->input->post('arr'),
                'name' => $this->input->post('title'),
				'class' => $this->input->post('pclass'),
                'desc' => $this->input->post('details')
                
            );
            $this->db->insert('portfolio', $info);
	}
        return $data;
    }
    
   
   function get_classes(){
       
	   
        $query = $this->db->query("SELECT * FROM portofolio_class");
    
        if($query->num_rows() > 0){
            foreach($query->result_array() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
   }
