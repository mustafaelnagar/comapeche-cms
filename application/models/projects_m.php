<?php

class Projects_m extends CI_Model{
	function get_projects() {
		$this->db->select('logo,logo_url');
		$this->db->from('logos');
		
		$q = $this->db->get();
		
		if($q->num_rows() > 0) {
			foreach ($q->result_array() as $row) {
				$data[] = $row;
			}
			return $data;
		}		
		
	}
}