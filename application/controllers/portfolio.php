<?php

Class Portfolio extends CI_Controller {
    
    function index() {
        
        $this->load->model('portf_m');
		  $this->load->model('portfolio_add_m');
$this->load->model('home_m');	//for the social        
            $this->load->model('brands_m');
			$this->load->model('site_meta_m');
        $this->load->view('template/index', array(
            'view_name' => "portfolio_v",            
            'data' => $this->portf_m->index(),
			'slider' => "false",
			'single_product'=>"false",
			'social'=>$this->home_m->social(),
			'show_single_slider'=>"false",
             'brands'=>$this->brands_m->get_brands(),
			  'classes'=>$this->portfolio_add_m->get_classes(),
			   'meta'=>$this->site_meta_m->index()
        ));
    }
	///functinon get details
	function get_deatils(){
	$current_id=$this->uri->segment(2); 
	
	//echo $current_id;
	 $this->load->model('portf_m');  
	 $data=$this->portf_m->portfolio_of_element($current_id);
	 
	 
	  $this->load->view('template/index', array(
            // 'view_name' => "portfolio_v",
			'view_name' => "single_portf",
			
            
            'data' => $data,
			'slider' => "false",
			'single_product'=>"true",
			'show_single_slider'=>"true",
			 'meta'=>$this->site_meta_m->index()
            
        ));
	 
	}
    
}
