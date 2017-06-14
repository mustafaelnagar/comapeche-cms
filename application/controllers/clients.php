<?php

Class clients extends CI_Controller {
    
    function index() {
        
        $this->load->model('services_m');
        $this->load->model('home_m');	//for the social
            $this->load->model('brands_m');
			$this->load->model('site_meta_m');
        $args=$this->uri->segment(2);
		// echo "Args are".$args."<br/>";
		
		
            if($args!=NULL){
			//that mean we dshould load with ids
			
		$this->load->view('template/index', array(
            'view_name' => "services_v",
            'the_current' => $this->services_m->get_service($args),
			'services' => $this->services_m->index(),
			'social'=>$this->home_m->social(),
            'slider'=>'false',
			 'brands'=>$this->brands_m->get_brands(),
			  'meta'=>$this->site_meta_m->index()
        ));
			}else{
			
			
		$this->load->view('template/index', array(
            'view_name' => "services_v",
            'services' => $this->services_m->index(),
			'social'=>$this->home_m->social(),
            'slider'=>'false',
			 'brands'=>$this->brands_m->get_brands(),
			  'meta'=>$this->site_meta_m->index()
        ));
    }
    }
}
