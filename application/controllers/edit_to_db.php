<?php
class Edit_to_db  extends CI_controller{

 function __construct(){
      parent::__construct();
   
    $this->load->model('edit_to_db_m');
   }
function index(){

  
	 $data=$this->edit_to_db_m->Getdata();

    $this->load->view('admin_template/index', array(
            'view_name' => "cpanel/edit_to_db_v",
            'about' => $data
			
        )); 
}//end function index
 
}//end class 
?>