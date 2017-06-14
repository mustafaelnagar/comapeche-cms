<?php

Class Contacts extends CI_Controller {
    
    function index() {
        
        $this->load->model('contacts_m');
        $this->load->model('home_m');	//for the social        
            $this->load->model('brands_m');
			$this->load->model('site_meta_m');
	
    
	
	if($_POST){
	// echo "<p>sending data</p>";
	
	//get the mail conf
            
			$this->load->view('template/index', array(
            'view_name' => "contacts_v",
            
	    'contacts' => $this->contacts_m->index(),
            'mail' => $this->contacts_m->get_mail(),
			'social'=>$this->home_m->social(),
			'slider'=>'false',
			 'brands'=>$this->brands_m->get_brands(),
			  'meta'=>$this->site_meta_m->index(),
			  'sent'=>$this->contacts_m->send_mail()	
        ));
	}else{
		$this->load->view('template/index', array(
            'view_name' => "contacts_v",
            
            'contacts' => $this->contacts_m->index(),
            'mail' => $this->contacts_m->get_mail(),
			'social'=>$this->home_m->social(),
			'slider'=>'false',
			 'brands'=>$this->brands_m->get_brands(),
			  'meta'=>$this->site_meta_m->index()
        ));
	
	}
	}
	
	
    
}