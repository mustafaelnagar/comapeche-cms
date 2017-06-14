<?php

class ehome_four_blocs_m extends CI_Model{
	function getAll() {
		$this->db->select('block_name,block_url,background');
		$this->db->from('main_blocks');
		
		// $q = $this->db->get('main_blocks','0','3');
		
		if($q->num_rows() > 0) {
			foreach ($q->result_array() as $row) {
				$data[] = $row;
			}
			return $data;
		}		
		
	}
 
    function blocks() {
        $query = $this->db->query("SELECT * FROM main_blocks");
    
        if($query->num_rows() > 0){
            foreach($query->result_array() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
    
  
  
    //////////////// CPanel ///////////////////
    
    function edit_blocks($info) {
        $this->db->update_batch('main_blocks', $info, 'id');
        $data = array(
            'sent' => "sent"
        );
        return $data;
    }
    
}