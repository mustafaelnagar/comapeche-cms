<?php

class Home_m extends CI_Model{
	function getAll() {
		$this->db->select('block_name, block_url,css_class');
		$this->db->from('main_blocks');
		
		$q = $this->db->get();
		
		if($q->num_rows() > 0) {
			foreach ($q->result_array() as $row) {
				$data[] = $row;
			}
			return $data;
		}		
		
	}
}