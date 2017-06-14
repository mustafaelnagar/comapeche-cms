<?php

Class Products_m extends CI_Model {
    
    function index() {
        
        $this->db->where('arr', $this->uri->segment(2));
        $query = $this->db->get('products');
        
        if($query->num_rows() > 0){
            foreach($query->result_array() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
    
    function related_pro() {
        
        $arr = $this->uri->segment(2);
        
        $query = $this->db->query("SELECT * FROM products WHERE arr!=$arr limit 6");
    
        if($query->num_rows() > 0){
            foreach($query->result() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
    
    ///////// Admin ////////////
    
    function products() {
        $query = $this->db->query("SELECT * FROM products");
    
        if($query->num_rows() > 0){
            foreach($query->result() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
    
    // ME: Insert new product & uploading the TWO pics
    function upload(){
        
        $files = array();
        
        $config = array(
	    'allowed_types' => 'jpg|jpeg|gif|png',
	    'upload_path' => './images/products/',
	    'max_size' => 200000
	);

	$this->load->library('upload', $config);
        
        foreach($_FILES as $key => $value)
        {            
            if( ! empty($value['name']))
            {
                if( ! $this->upload->do_upload($key))
                {                                           
                    $data = array(
                        'sent' => 'error'
                    );
                }
                else
                {
                    // Build a file array from all uploaded files
                    $files[] = $this->upload->data();
                    $data = array(
                        'sent' => 'sent'
                    );
                }
            }
        }
        // ME: Insert to database
        $info = array(
            'img' => $files[0]['file_name'],
            'gift' => $files[1]['file_name'],
            'arr' => $this->input->post('arr'),
            'name' => $this->input->post('name'),
            'details' => $this->input->post('details'),
            'company' => $this->input->post('company')
        );
        $this->db->insert('products', $info);
        return $data;
    }
    
    function pull() {
        
        $this->db->where('id', $this->uri->segment(2));
        $query = $this->db->get('products');
        
        if($query->num_rows() > 0){
            foreach($query->result_array() as $row){
                $data[] = $row;
            }
            return $data;
        }
    }
    
    // ME: Update product & uploading the TWO pics
    function upload2(){
        
        $files = array();
        
        $config = array(
	    'allowed_types' => 'jpg|jpeg|gif|png',
	    'upload_path' => './images/products/',
	    'max_size' => 200000
	);

	$this->load->library('upload', $config);
        
        foreach($_FILES as $key => $value)
        {            
            if( ! empty($value['name']))
            {
                if( ! $this->upload->do_upload($key))
                {                                           
                    $data = array(
                        'sent' => 'error'
                    );
                }
                else
                {
                    // Build a file array from all uploaded files
                    $files[] = $this->upload->data();
                    $data = array(
                        'sent' => 'sent'
                    );
                }
            }
        }
        
        // ME: Updating database
        if(empty($files)){
            $info = array(
                'arr' => $this->input->post('arr'),
                'name' => $this->input->post('name'),
                'details' => $this->input->post('details'),
                'company' => $this->input->post('company')
            );
            $data = array(
                    'sent' => 'error'
                );
        }else{
            $info = array(
                'img' => $files[0]['file_name'],
                'gift' => $files[1]['file_name'],
                'arr' => $this->input->post('arr'),
                'name' => $this->input->post('name'),
                'details' => $this->input->post('details'),
                'company' => $this->input->post('company')
            );
        }
        $id = $this->uri->segment(2);
        $this->db->update('products', $info, "id = $id");
        return $data;
    }
    
    function delete() {
	$this->db->where('id', $this->uri->segment(2));
        $query = $this->db->get('products');
        
        if($query->num_rows() > 0){
            foreach($query->result() as $row){
                $data[] = $row;
            }
            $pic = $row->img;
            $gift = $row->gift;
        }
	
        $id = $this->uri->segment(2);
        $this->db->where('id', $id);
        $this->db->delete('products');
	
	unlink('images/products/'.$pic);
	unlink('images/products/'.$gift);
    }
    
}