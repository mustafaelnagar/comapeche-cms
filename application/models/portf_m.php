<?php
/*connect to the databas eand get the servies data */



Class Portf_m extends CI_Model {
    
    function index() {
        $query = $this->db->query("SELECT * FROM portfolio");
    
        if($query->num_rows() > 0){
            foreach($query->result_array() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
	
	
	  function portfolio_of_element($id) {
        $query = $this->db->query("SELECT * FROM portfolio where `id`=$id");
    
        if($query->num_rows() > 0){
            foreach($query->result_array() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
	
	
	   function filters() {
        $query = $this->db->query("SELECT * FROM portfolio");
    
        if($query->num_rows() > 0){
            foreach($query->result_array() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
    }