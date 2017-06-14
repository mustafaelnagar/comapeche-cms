<?php

Class Contacts_m extends CI_Model {
    
    function index() {
        $query = $this->db->query("SELECT * FROM contacts");
    
        if($query->num_rows() > 0){
            foreach($query->result_array() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
    
    function get_mail() {
        $query = $this->db->query("select * from career");
    
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
		'new_image' => './images/img/',
		'maintain_ratio' => true,
		'width' => 450,
		'height' => 350
	    );
		
	    $this->load->library('image_lib', $config);
	    $this->image_lib->resize();
            
            // ME: Update the database
            $info = array(
                'img' => $data['file_data']['file_name'],
                'title' => $this->input->post('title'),
				'gmaps' => $this->input->post('gmaps'),
                'details' => $this->input->post('details')
            );
	}
            
        $this->db->update('contacts', $info);
            
        return $data;
    }
      
function send_mail(){
     $this->load->library('email');
    $this->load->helper('email');
     //getthe data from the form 
	 
	 
	 $config_name=$this->input->post('name');
	 $config_from=$this->input->post('email');
	 $config_phone=$this->input->post('phone');
	 $config_messege=$this->input->post('comments');
	 
	 // $to="mustafa.adel.elnagar@mufix.org";
	 $to="mus.elnagar@gmail.com";
	 
    // $this->email->to($to);
	$this->email->to($this->get_contact_person());
    $this->email->from($config_from);
    $this->email->subject('Email from '.$config_from);
    $this->email->message($config_messege);
    $send_flag=$this->email->send();
	// echo $this->email->print_debugger();
    // echo "flag = ".$send_flag." T o ".$this->get_contact_person();
    // $sent=$send_flag;
	return $send_flag;
	}

function get_contact_person(){
//will get a   mail from the database
 
   
   $query = $this->db->query("SELECT `sitemail` FROM  `site_meta` WHERE  `id` =1 ");
        if($query->num_rows() > 0){
            foreach($query->result_array() as $row){
                $data= $row['sitemail'];
            }
            return $data;
        }
}
}