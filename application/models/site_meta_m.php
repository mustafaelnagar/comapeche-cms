<?php

Class site_meta_m extends CI_Model {
    
    function index() {
        $query = $this->db->query("SELECT * FROM site_meta ");
    
        if($query->num_rows() > 0){
            foreach($query->result_array() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
    
	
    
    
    // ME: Update & uploading the pic
    function update_meta(){
        

if($_POST){
            // ME: Update the database
            $info = array(
                // 'img' => $data['file_data']['file_name'],
                'title' => $this->input->post('title'),
				'site_desc' => $this->input->post('site_desc'),
				'phone' => $this->input->post('phone'),
				'sitemail' => $this->input->post('sitemail'),
                'keywords' => $this->input->post('keywords')
            );
	
            
        $data=$this->db->update('site_meta', $info);
            
        return $data;
		}
    }
    
}