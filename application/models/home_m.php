<?php

class Home_m extends CI_Model{
	function getAll() {
		$this->db->select('block_name, block_url,background');
		$this->db->from('main_blocks');
		
		$q = $this->db->get();
		
		if($q->num_rows() > 0) {
			foreach ($q->result_array() as $row) {
				$data[] = $row;
			}
			return $data;
		}		
		
	}
  
    function slider() {
        $query = $this->db->query("SELECT * FROM en_slider ORDER BY arr ASC");
    
        if($query->num_rows() > 0){
            foreach($query->result() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
    
    // function blocks() {
        // $query = $this->db->query("SELECT * FROM home");
    
        // if($query->num_rows() > 0){
            // foreach($query->result_array() as $row){
                // $data[] = $row;
            // }
            // return $data;
        // }
    // }
    
    // function latest_pro() {
        // $query = $this->db->query("SELECT * FROM products limit 8");
    
        // if($query->num_rows() > 0){
            // foreach($query->result() as $row){
                // $data[] = $row;
            // }
            // return $data;
        // }
    // }
    
    // function customers() {
        // $query = $this->db->query("SELECT * FROM customers ORDER BY arr ASC");
    
        // if($query->num_rows() > 0){
            // foreach($query->result() as $row){
                // $data[] = $row;
            // }
            // return $data;
        // }
    // }
    
    function social() {
        $query = $this->db->query("SELECT * FROM social");
    
        if($query->num_rows() > 0){
            foreach($query->result_array() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
    
    //////////////// CPanel ///////////////////
    
    // function edit_blocks($info) {
        // $this->db->update_batch('home', $info, 'id');
        // $data = array(
            // 'sent' => "sent"
        // );
        // return $data;
    // }
    
    function edit_social($info) {
        $this->db->update_batch('social', $info, 'id');
        $data = array(
            'sent' => "sent"
        );
        return $data;
    }
    
}