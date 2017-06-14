<?php

Class Products extends CI_Controller {
    
    function index() {
        
        $this->load->model('home_m');
        $this->load->model('products_m');
        
        /* $this->load->library('pagination');
        
        $config['base_url'] = "http://localhost:8888/ciba/products";
        $config['total_rows'] = $this->db->get('products')->num_rows();
        $config['per_page'] = 1;
        $config['num_links'] = 2;
        $config['display_pages'] = FALSE;
        $config['full_tag_open'] = '<div class="pagination>"';
        $config['full_tag_close'] = "</div>";
        
        $this->pagination->initialize($config); */
        
        $data = $this->db->get('products')->num_rows();
        
        $this->load->view('template/index', array(
            'view_name' => "product_v",
            'social' => $this->home_m->social(),
            'product' => $this->products_m->index(),
            'records' => $data,
            'related_pro' => $this->products_m->related_pro()
        ));
    }
    
}