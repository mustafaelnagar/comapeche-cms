<?php

Class classes_m extends CI_Model {
    
    function index() {
        $query = $this->db->query("SELECT * portofolio_class");
    
        if($query->num_rows() > 0){
            foreach($query->result_array() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
    
	function get_logos(){
	$query = $this->db->query("SELECT * portofolio_class ");
    
        if($query->num_rows() > 0){
            foreach($query->result() as $row){
                $data[] = $row;
            }
            return $data;
        }
	}
	
    function our_classes() {
        $query = $this->db->query("SELECT * FROM portofolio_class");
    
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
        
      
 
  
            
            // ME: Update the database
            $info = array(
                
                'the_class' => $this->input->post('title')
			 
            );
	 
            
        $this->db->update('portofolio_class', $info, "id = 1");
            
        return $data;
    }
    
    // ME: Insert new service & uploading the pic
    function upload2(){
      
	   
            // ME: Insert to database
            $info = array(
        
                'the_class' => $this->input->post('title')
                // 'details' => $this->input->post('details'),
                // 'img_pos' => $this->input->post('img_pos')
            );
         $data=  $this->db->insert('portofolio_class', $info);
	 
        return $data;
    }
    
    function pull() {
        
        $this->db->where('id', $this->uri->segment(2));
        $query = $this->db->get('portofolio_class');
        
        if($query->num_rows() > 0){
            foreach($query->result_array() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
    
    function upload3(){
        
		
            // ME: Update the database
            $info = array(
                // 'logo' => $data['file_data']['file_name'],
                // 'arr' => $this->input->post('arr'),
                'the_class' => $this->input->post('title')
				// ,
                // 'img_pos' => $this->input->post('img_pos'),
                // 'details' => $this->input->post('details')
            );
	 
        
        $id = $this->uri->segment(2);
        $this->db->update('portofolio_class', $info, "id = $id");
            
        return $data;
    }
    
    function delete() {
	$this->db->where('id', $this->uri->segment(2));
        $query = $this->db->get('portofolio_class');
        
        if($query->num_rows() > 0){
            foreach($query->result() as $row){
                $data[] = $row;
            }
            // $pic = $row->img;
        }
	
        $id = $this->uri->segment(2);
        $this->db->where('id', $id);
        $this->db->delete('portofolio_class');
	
	// unlink('images/clients/'.$pic);
    }
    }
