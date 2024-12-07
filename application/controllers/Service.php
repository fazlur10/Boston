
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');  
        $this->load->model('main_services_model');
        $this->load->library('session');
    }
    public function index() {
        $data['main_services'] = $this->main_services_model->get_all_main_services();
        $this->load->view('pages/services', $data);
    }
    public function type($id) {
        // Load the necessary models
        $this->load->model('Service_model');
        
        // Get main service details for the banner
        $main_service = $this->Service_model->get_main_service($id);
        
        // Get sub-services for the given service_type
        $sub_services = $this->Service_model->get_sub_services($id);
        
        // Pass data to the view
        $data['main_service'] = $main_service;
        $data['sub_services'] = $sub_services;
        
        // Load the view
        $this->load->view('pages/sub_services', $data);
    }

    public function sub($id) {
        // Load the necessary model
        $this->load->model('Service_model');
        
        // Get the specific sub-service details
        $sub_service = $this->Service_model->get_sub_service($id);
        $main_service = $this->main_services_model->get_all_main_services();
        
        // Check if the sub-service exists
        if (!$sub_service) {
            show_404();
        }
        
        // Pass data to the view
        $data['sub_service'] = $sub_service;
        $data['main_services'] = $main_service;
        
        // Load the view
        $this->load->view('pages/sub_service_details', $data);
    }
    
    
}
