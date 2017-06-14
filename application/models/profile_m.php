<?php

class Profile_m extends CI_Model {
    
    function pull() {
        
        $query = $this->db->get('site_admin');
        
        if($query->num_rows() > 0){
            foreach($query->result() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
    
    function update(){
	
	$query = $this->db->get('site_admin');
        
        if($query->num_rows() > 0){
            foreach($query->result() as $row){
                $data[] = $row;
            }
            $oldpass = $row->pass;
        }
	
	$old = md5($this->input->post('oldpass'));
	
	if($old == $oldpass){
	    
	    $new = md5($this->input->post('newpass'));
	    
	    $data = array(
		'name' => $this->input->post('name'),
		'email' => $this->input->post('email'),
		'pass' => $new
	    );
	    
	    $this->db->update('site_admin', $data);
	    $sent = "sent";
	    
	}else{
	    
	    $sent = "error";
	    
	}
	
	return $sent;
    }
}