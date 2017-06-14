<?php

class ehome_three_blocks_m extends CI_Model{
	function getAll() {
	 
		$q=$this->db->query('SELECT * FROM  `main_blocks` ORDER BY  `main_blocks`.`id` ASC LIMIT 0 , 3');
		if($q->num_rows() > 0) {
			foreach ($q->result_array() as $row) {
				$data[] = $row;
			}
			return $data;
		}		
		
	}
 
    function blocks() {
      $query= 	$this->db->query('SELECT * FROM  `main_blocks` ORDER BY  `main_blocks`.`id` DESC LIMIT 0 , 3');
    
        if($query->num_rows() > 0){
            foreach($query->result_array() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
    
  
  
    //////////////// CPanel ///////////////////
    
    function edit_blocks($info) {
	// Turn off all error reporting
error_reporting(0);

 
        $this->db->update_batch('main_blocks', $info, 'id');
        $data = array(
            'sent' => "sent"
        );
        return $data;
    }
    
	
    function edit_blocks_with_update() {
	//here is the edit with uplaod #Mustafa
	
///////////////////////////////////////////////////////////////->>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
        $config = array(
	    'allowed_types' => 'jpg|jpeg|gif|png',
	    'upload_path' => './images/news/',
	    'max_size' => 200000
	);

	$this->load->library('upload', $config);
/////////////////////////////////////////////////////////////<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<------
//we have 2 cases 

//case (1) update the info ->no uploads ->if (!$this->upload->do_upload()){ -> we will get the  info and update the record 
//case (1) update the info ->no uploads ->[[[the else of if ]]](!$this->upload->do_upload()){ -> we will get the  info and update the record 
	if ($_POST){
	    
if($this->upload->do_upload()){
	//the final data to update the batch 
	$info = array(
		    array(
			'id' => 7,
			'block_name' => $this->input->post('title7'),
			// 'block_notes' => $this->input->post('text7'),
			'block_url' => $this->input->post('url7')
		    ),
		    array(
			'id' => 6,
			'block_name' => $this->input->post('title6'),
			// 'block_notes' => $this->input->post('text6'),
			'block_url' => $this->input->post('url6')
		    ),
		    array(
			'id' => 5,
			'block_name' => $this->input->post('title5'),
			// 'block_notes' => $this->input->post('text5', FALSE),
			'block_url' => $this->input->post('url5')
		    ) 
			
		);
		$data = $this->ehome_three_blocks_m->edit_blocks($info);
                $sent = $data['sent'];
				
				
	
// echo $this->upload->display_errors();//debugging  why upload failed 
			
	}
	else{

	// $this->load->library('upload', $config);
//////////////////////////////////////// img 7///////////////////////////////		
	
//here I need to upload the second image with the same config of the first 
$field_name7 = "userfile7";
$result7=$this->upload->do_upload($field_name7);
	//if result , mean if the filed no 7 has data uploaded succss
	$data_img7=NULL;
	if($result7){
	    $data_img7 = array(
                'file_data' => $this->upload->data(),
                'sent' => 'sent'
            );
			
			  // ME: Config for resize
            $config7 = array(
		'source_image' => $data_img7['file_data']['full_path'],
		'upload_path' => './images/news/',
		'maintain_ratio' => false,
		'width' => 705,
		'height' => 560
	    );

	    $this->load->library('image_lib', $config7);
				 $this->image_lib->initialize($config7);	
	    $this->image_lib->resize();
	 
		$this->image_lib->clear();
}
	

//////////////////////////////////////// img 6///////////////////////////////		
	
//here I need to upload the second image with the same config of the first 
$field_name6 = "userfile6";
$result6=$this->upload->do_upload($field_name6);
$data_img6=NULL;
	if($result6){
	    $data_img6 = array(
                'file_data' => $this->upload->data(),
                'sent' => 'sent'
            );
			  // ME: Config for resize
            $config6 = array(
		'source_image' => $data_img6['file_data']['full_path'],
		'upload_path' => './images/news/',
		'maintain_ratio' => false,
			'width' => 705,
		'height' => 560
	    );
	    
	    $this->load->library('image_lib', $config6);
		$this->image_lib->initialize($config6);	
	    $this->image_lib->resize();
		$this->image_lib->clear();
}
	
	
	//////////////////////////////////////// img 5///////////////////////////////
	$field_name5 = "userfile5";
$result5=$this->upload->do_upload($field_name5);
$data_img5=NULL;
if($result5){	
	    $data_img5 = array(
                'file_data' => $this->upload->data(),
                'sent' => 'sent'
            );
			  // ME: Config for resize
            $config5 = array(
		'source_image' => $data_img5['file_data']['full_path'],
		'upload_path' => './images/news/',
		'maintain_ratio' => false,
			'width' => 705,
		'height' => 560
	    );
		
	    $this->load->library('image_lib', $config5);
		$this->image_lib->initialize($config5);	
	    $this->image_lib->resize();
		$this->image_lib->clear();
}
	

//////////////////////////////////////// img 6///////////////////////////////

if($result7==1 and $result6==1 and $result5==1){
//add all       111

	//the final data to update the batch 
	$info = array(
		    array(
			'id' => 7,
			'block_name' => $this->input->post('title7'),
			'background' => 'images/news/'.$data_img7['file_data']['file_name'],
			'block_url' => $this->input->post('url7')
		    ),
		    array(
			'id' => 6,
			'block_name' => $this->input->post('title6'),
			
			'background' => 'images/news/'.$data_img6['file_data']['file_name'],
			'block_url' => $this->input->post('url6')
		    ),  array(
			'id' => 5,
			'block_name' => $this->input->post('title5'),
			'background' => 'images/news/'.$data_img5['file_data']['file_name'],
			'block_url' => $this->input->post('url5')
		    ) 
			
		);

}


if($result7==1 and $result6==1 and $result5==0){
//add all       110


	//the final data to update the batch 
	$info = array(
		    array(
			'id' => 7,
			'block_name' => $this->input->post('title7'),
			'background' => 'images/news/'.$data_img7['file_data']['file_name'],
			'block_url' => $this->input->post('url7')
		    ),
		    array(
			'id' => 6,
			'block_name' => $this->input->post('title6'),
			
			'background' => 'images/news/'.$data_img6['file_data']['file_name'],
			'block_url' => $this->input->post('url6')
		    ),  array(
			'id' => 5,
			'block_name' => $this->input->post('title5'),
			// 'background' => 'images/news/'.$data_img5['file_data']['file_name'],
			'block_url' => $this->input->post('url5')
		    ) 
			
		);

}



if($result7==1 and $result6==0 and $result5==1){
//add all       101

	//the final data to update the batch 
	$info = array(
		    array(
			'id' => 7,
			'block_name' => $this->input->post('title7'),
			'background' => 'images/news/'.$data_img7['file_data']['file_name'],
			'block_url' => $this->input->post('url7')
		    ),
		    array(
			'id' => 6,
			'block_name' => $this->input->post('title6'),
			
			// 'background' => 'images/news/'.$data_img6['file_data']['file_name'],
			'block_url' => $this->input->post('url6')
		    ),  array(
			'id' => 5,
			'block_name' => $this->input->post('title5'),
			'background' => 'images/news/'.$data_img5['file_data']['file_name'],
			'block_url' => $this->input->post('url5')
		    ) 
			
		);

}



if($result7==0 and $result6==1 and $result5==1){
//add all       011

	//the final data to update the batch 
	$info = array(
		    array(
			'id' => 7,
			'block_name' => $this->input->post('title7'),
			// 'background' => 'images/news/'.$data_img7['file_data']['file_name'],
			'block_url' => $this->input->post('url7')
		    ),
		    array(
			'id' => 6,
			'block_name' => $this->input->post('title6'),
			
			'background' => 'images/news/'.$data_img6['file_data']['file_name'],
			'block_url' => $this->input->post('url6')
		    ),  array(
			'id' => 5,
			'block_name' => $this->input->post('title5'),
			'background' => 'images/news/'.$data_img5['file_data']['file_name'],
			'block_url' => $this->input->post('url5')
		    ) 
			
		);

}


if($result7==0 and $result6==0 and $result5==1){
//add all       001

	//the final data to update the batch 
	$info = array(
		    array(
			'id' => 7,
			'block_name' => $this->input->post('title7'),
			// 'background' => 'images/news/'.$data_img7['file_data']['file_name'],
			'block_url' => $this->input->post('url7')
		    ),
		    array(
			'id' => 6,
			'block_name' => $this->input->post('title6'),
			
			// 'background' => 'images/news/'.$data_img6['file_data']['file_name'],
			'block_url' => $this->input->post('url6')
		    ),  array(
			'id' => 5,
			'block_name' => $this->input->post('title5'),
			'background' => 'images/news/'.$data_img5['file_data']['file_name'],
			'block_url' => $this->input->post('url5')
		    ) 
			
		);

}


if($result7==0 and $result6==1 and $result5==0){
//add all       010

	//the final data to update the batch 
	$info = array(
		    array(
			'id' => 7,
			'block_name' => $this->input->post('title7'),
			// 'background' => 'images/news/'.$data_img7['file_data']['file_name'],
			'block_url' => $this->input->post('url7')
		    ),
		    array(
			'id' => 6,
			'block_name' => $this->input->post('title6'),
			
			'background' => 'images/news/'.$data_img6['file_data']['file_name'],
			'block_url' => $this->input->post('url6')
		    ),  array(
			'id' => 5,
			'block_name' => $this->input->post('title5'),
			// 'background' => 'images/news/'.$data_img5['file_data']['file_name'],
			'block_url' => $this->input->post('url5')
		    ) 
			
		);

}

if($result7==1 and $result6==0 and $result5==0){
//add all       100

	//the final data to update the batch 
	$info = array(
		    array(
			'id' => 7,
			'block_name' => $this->input->post('title7'),
			'background' => 'images/news/'.$data_img7['file_data']['file_name'],
			'block_url' => $this->input->post('url7')
		    ),
		    array(
			'id' => 6,
			'block_name' => $this->input->post('title6'),
			
			// 'background' => 'images/news/'.$data_img6['file_data']['file_name'],
			'block_url' => $this->input->post('url6')
		    ),  array(
			'id' => 5,
			'block_name' => $this->input->post('title5'),
			// 'background' => 'images/news/'.$data_img5['file_data']['file_name'],
			'block_url' => $this->input->post('url5')
		    ) 
			
		);

}

if($result7==0 and $result6==0 and $result5==0){
//add all       handled up :) //the defult No uploads

	//the final data to update the batch 
	$info = array(
		    array(
			'id' => 7,
			'block_name' => $this->input->post('title7'),
			// 'background' => 'images/news/'.$data_img7['file_data']['file_name'],
			'block_url' => $this->input->post('url7')
		    ),
		    array(
			'id' => 6,
			'block_name' => $this->input->post('title6'),
			
			// 'background' => 'images/news/'.$data_img6['file_data']['file_name'],
			'block_url' => $this->input->post('url6')
		    ),  array(
			'id' => 5,
			'block_name' => $this->input->post('title5'),
			// 'background' => 'images/news/'.$data_img5['file_data']['file_name'],
			'block_url' => $this->input->post('url5')
		    ) 
			
		);

}

		$data = $this->ehome_three_blocks_m->edit_blocks($info);
                $sent = $data['sent'];
				
				
				
	
        // $this->db->update_batch('main_blocks', $info, 'id');
        // $data = array(
            // 'sent' => "sent"
        // );
        return $data;
    
	 }//end else 
	 }//end if is post
	 else{
	 //else posted data 
	 $this->getAll();
	 }
    
	}//end function 
	
	
}//end class 