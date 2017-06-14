<?php

Class Services_add_new_m extends CI_Model {
    function __construct(){
	parent::__construct();
	
	if($_POST){
	 $this->addservice();
	}//end if
	}//end cons
  
    
 
function addservice(){
//GET THE DATA FROM THE POST 
$data=$this->input->post();
$order=$data['arr'];
$title=$data['title'];
$details=$data['details'];

//prepare the query 
$data=Array(
'title'=>$title,
'details'=>$details,
'arr'=>$order,

);
$this->db->insert('services',$data);

}
}