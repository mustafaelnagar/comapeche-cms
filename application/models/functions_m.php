<?php
//this is nagar functions they all are getter data 
//@mustafa_elnagar
Class functions_m extends CI_Model {
    
function getslider(){
	    $query = $this->db->query("SELECT * FROM slider ORDER BY  `slider`.`arr` ASC ");
    
        if($query->num_rows() > 0){
            foreach($query->result_array() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
	
	
	///////////////////////////////////////////////////////////////////
		
	function get_about(){
	    $query = $this->db->query("SELECT * FROM about ");
    
        if($query->num_rows() > 0){
            foreach($query->result_array() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
    
	///////////////////////////////////////////////////////////////////
	
	
	function get_eaboutlist(){
	    $query = $this->db->query("SELECT * FROM eabout_list ");
    
        if($query->num_rows() > 0){
            foreach($query->result_array() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
    /////////////////////////////////////////////////////////////////////////////////////
	
	function get_testo(){
	    $query = $this->db->query("SELECT * FROM testmonials ");
    
        if($query->num_rows() > 0){
            foreach($query->result_array() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
	    /////////////////////////////////////////////////////////////////////////////////////
	function get_best_three(){
	    $query = $this->db->query("SELECT * FROM thebest ");
    
        if($query->num_rows() > 0){
            foreach($query->result_array() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
    /////////////////////////////////////////////////////////////////////////////////////
	function get_numbers(){
	    $query = $this->db->query("SELECT * FROM org_numbers ");
    
        if($query->num_rows() > 0){
            foreach($query->result_array() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
    /////////////////////////////////////////////////////////////////////////////////////
	   
	function get_classes(){
	    $query = $this->db->query("SELECT * FROM portofolio_class ");
    
        if($query->num_rows() > 0){
            foreach($query->result_array() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
	
	
    /////////////////////////////////////////////////////////////////////////////////////
	      
	function get_products(){
	    $query = $this->db->query("SELECT * FROM portfolio ");
    
        if($query->num_rows() > 0){
            foreach($query->result_array() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
	
	
    /////////////////////////////////////////////////////////////////////////////////////
	   
	function get_services(){
	    $query = $this->db->query("SELECT * FROM services  ORDER BY  `services`.`arr` ASC ");
    
        if($query->num_rows() > 0){
            foreach($query->result_array() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
    /////////////////////////////////////////////////////////////////////////////////////
	
    
	   
	function get_logos(){
	    $query = $this->db->query("SELECT * FROM logos ORDER BY  `arr` ASC ");
    
        if($query->num_rows() > 0){
            foreach($query->result() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
    /////////////////////////////////////////////////////////////////////////////////////
	
	function get_contacts(){
	    $query = $this->db->query("SELECT * FROM contacts ");
        // $query = $this->db->query("SELECT * FROM portfolio ");
    
        if($query->num_rows() > 0){
            foreach($query->result_array() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
    /////////////////////////////////////////////////////////////////////////////////////
	
    function get_sitemeta() {
        $query = $this->db->query("SELECT * FROM site_meta ");
    
        if($query->num_rows() > 0){
            foreach($query->result_array() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
    ////////////////////////////////////////////////////////////////////////////////////
	
    function get_social() {
        $query = $this->db->query("SELECT * FROM social ");
    
        if($query->num_rows() > 0){
            foreach($query->result_array() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
	
    ////////////////////////////////////////////////////////////////////////////////////
	
    function get_single_product() {
	
	   $id=$this->uri->segment(2);
       $query = $this->db->query("SELECT * FROM portfolio where `id`=$id");
    
        if($query->num_rows() > 0){
            foreach($query->result_array() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
	   ////////////////////////////////////////////////////////////////////////////////////
	
    function get_related_portfolio() {
	
	   // $id=$this->uri->segment(2);
       $query = $this->db->query("SELECT * 
FROM portfolio
ORDER BY RAND( ) 
LIMIT 0 , 3");
    
        if($query->num_rows() > 0){
            foreach($query->result_array() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
	
    
    
	
}