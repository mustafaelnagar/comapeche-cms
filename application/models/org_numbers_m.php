<?php

Class org_numbers_m extends CI_Model {
    
    function index() {
        $query = $this->db->query("SELECT * FROM org_numbers");
    
        if($query->num_rows() > 0){
            foreach($query->result_array() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
 
     
    function update_org_numbers($info) {
        $this->db->update_batch('org_numbers', $info, 'id');
        $data = array(
            'sent' => "sent"
        );
        return $data;
    }
	
	
}