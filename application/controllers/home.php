<?php

class Home extends CI_Controller {
	
	function index() {	
	    //load the modules 
		$this->load->model('functions_m');
		$this->load->model('home_m');	
		$this->load->model('projects_m');
		$this->load->model('about_m');
		$this->load->model('banner_m');
		$this->load->model('logos_m');
        $this->load->model('brands_m');
		$this->load->model('site_meta_m');
		
	 
        //call the templete & pass the variables to it on fly 
		$this->load->view('template/index', array(
			'view_name' => 'home_v',#call the view 
			'slider'=>$this->functions_m->getslider(),#slider data  get_banner
			'about'=> $this->functions_m->get_about(),#about
			'listabout'=> $this->functions_m->get_eaboutlist(),#listabout
			'testo'=>$this->functions_m->get_testo(),#testo		
             'best'=>$this->functions_m->get_best_three(),  			#we miss the best three
			'numbers'=>$this->functions_m->get_numbers(),#numbers
			'filters' => $this->functions_m->get_classes(),// logo, link
			'products'=>$this->functions_m->get_products(),#the portfoio for the one page  
			'services'=>$this->functions_m->get_services(),//#get the 7 headlines with there text
			'logos'=>$this->logos_m->get_logos(),//# Our clients old fashiion ha3
			'contact'=>$this->functions_m->get_contacts(),
			//'slider'=>"true",
			'social'=>$this->functions_m->get_social(),
			
			'sdata'=>$this->banner_m->get_slides(),
			 
			 'meta'=>$this->site_meta_m->index()#meta data
		));  
	}

}