<?php

class Login extends CI_Controller {
    
    public function validate_credentials() {
        
        $this->load->model('membership_m');
        $data = $this->membership_m->validate();
        
        if($data || $data != false){
            $this->session->set_userdata($data);
            echo "true";
        }
    }
    
    public function forget() {
        
        $this->load->model('membership_m');
        $data = $this->membership_m->remind_me();
        
        if($data || $data != false){
            echo "true";
        }else{
            echo "false";
        }
        
    }
    
    public function forget_pass() {
        
        $this->load->model('home_m');
        
        if (isset($_POST['submit'])){
            $this->load->model('membership_m');
            $data = $this->membership_m->change_pass();
            
            $this->load->view('template/index', array(
                'view_name' => 'forget_v',
                'result' => $data,
                'site_options' => $this->home_m->site_options()
            ));
        }else{
            
            $this->load->view('template/index', array(
                'view_name' => 'forget_v',
                'site_options' => $this->home_m->site_options()
            ));
            
        }
        
    }
    
    ////////// Cpanel ///////////
    
    public function cpanel_credentials() {
        
        $this->load->model('membership_m');
        $data = $this->membership_m->cpanel_validate();
        
        if($data || $data != false){
            $this->session->set_userdata($data);
            
            redirect('banner');
            /*$this->load->view('admin_template/index', array(
                'view_name' => 'statistics_v',
                'result' => $data
                //'site_options' => $this->home_m->site_options()
            ));*/
        }else{
	        redirect('cpanel');
        }
    }
    
}