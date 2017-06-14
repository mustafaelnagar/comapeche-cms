<?php
class Edit_to_db_m extends CI_Model{
 function __construct(){
      parent::__construct();
	  if($_POST){
    $this->update_db();
}
   
	}
function Getdata(){
// $data=array('2','mohamed we keda ') ;
$query=$this->db->query("select * from test_table");
// if($query->num_row()>0){
foreach($query->result_array() as $row){
$about[]=$row;//as  a shared variable to be  accessed at the view -> Must be sent  through the controller 
}
return $about;
}//end function index 
function update_db(){
$post_data=$this->input->post(); //get all post value to data array
//get the data we want to update
 $id=$post_data['id'];
 $title=$post_data['title'];
 $url=$post_data['url'];
 $details=$post_data['details'];
 
           // ME: Update the database
            $info = array(
                
                'block_name' => $title,
                'block_url' => $url,
				'block_notes' => $details
            );   
        
        $this->db->update('test_table', $info, "`id` = '".intval($id)."'");
            }
}//end class 
?>