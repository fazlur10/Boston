<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');  
        $this->load->model('main_services_model');
        $this->load->library('session');
    }

    public function index() {
        $data['main_services'] = $this->main_services_model->get_all_main_services();
        // Load the 'about' view
        $this->load->view('pages/about', $data);
    }
}
