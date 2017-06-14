<?php

Class Single_product extends CI_Controller {
    

	function index(){
 	
	// echo $current_id='2';
 	$current_id=$this->uri->segment(2);
	 $this->load->model('signle_product_m');  
	 $this->load->model('functions_m');	 
	 ##################classic models
	 
	 	$this->load->model('home_m');	
		$this->load->model('projects_m');
		$this->load->model('about_m');
		$this->load->model('banner_m');
		$this->load->model('logos_m');
        $this->load->model('brands_m');
		$this->load->model('site_meta_m');
		
    $data=$this->signle_product_m->index($current_id);
	 
	 
	 
	  $this->load->view('template/portfolio_index', array(
            'view_name' => "single_porduct_v",
            'data' => $data,			
			#normal data to load
		 
		   'slider'=>$this->functions_m->getslider(),#slider data  get_banner
			'about'=> $this->functions_m->get_about(),#about
			'listabout'=> $this->functions_m->get_eaboutlist(),#listabout
			// 'testo'=>$this->functions_m->get_testo(),#testo		
             // 'best'=>$this->functions_m->get_best_three(),  			#we miss the best three
			// 'numbers'=>$this->functions_m->get_numbers(),#numbers
			// 'filters' => $this->functions_m->get_classes(),// logo, link
			// 'products'=>$this->functions_m->get_products(),#the portfoio for the one page  
			// 'services'=>$this->functions_m->get_services(),//#get the 7 headlines with there text
			// 'logos'=>$this->logos_m->get_logos(),//# Our clients old fashiion ha3
			'signle'=>$this->functions_m->get_single_product(),
			'contact'=>$this->functions_m->get_contacts(),
			//'slider'=>"true",
			'social'=>$this->functions_m->get_social(),
			'related_products'=> $this->functions_m->get_related_portfolio(),#select random 3 Products
			// 'sdata'=>$this->banner_m->get_slides(),
			 
			 'meta'=>$this->site_meta_m->index()#meta data
			
			
        ));
	 
	
    
}
}
