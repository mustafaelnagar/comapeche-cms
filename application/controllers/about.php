<?php

class About extends CI_Controller {
	
	function index() {	
	    //load the modules 
		// $this->load->model('home_m');	
		// $this->load->model('projects_m');
		$this->load->model('about_m');
		$this->load->model('home_m');	//for the social
		    $this->load->model('brands_m');
		$this->load->model('site_meta_m');
		
		
        //call the templete & pass the variables to it on fly 
		$this->load->view('template/index', array(
			'view_name' => 'about_v',
			'about' => $this->about_m->index(),
			'social'=>$this->home_m->social(),
			'slider'=>'false',
			 'brands'=>$this->brands_m->get_brands(),
			  'meta'=>$this->site_meta_m->index()
		));  
	}

}