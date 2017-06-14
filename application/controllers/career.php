<?php

Class Career extends CI_Controller {
    
    function index() {
        
        $this->load->model('home_m');
        $this->load->model('career_m');
        
        $this->load->view('template/index', array(
            'view_name' => "career_v",
            'social' => $this->home_m->social(),
            'career' => $this->career_m->index()
        ));
    }
    
}