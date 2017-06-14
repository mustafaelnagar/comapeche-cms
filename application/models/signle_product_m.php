<?php
/*connect to the databas eand get the servies data */



Class signle_product_m extends CI_Model {
    
    function index($current_id) {
	
        $query = $this->db->query("SELECT * FROM portfolio where `id`=$current_id");
    
        if($query->num_rows() > 0){
            foreach($query->result_array() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
	
	
	  
    }