<?php

class Logout extends CI_Controller {
    
    public function out() {
        $this->session->unset_userdata('is_cplogged_in');
        redirect('cpanel');
    }
    
}