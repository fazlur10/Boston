<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');  
        $this->load->model('Doctor_model'); // Load the model
        $this->load->model('main_services_model');
        $this->load->library('session');
    }

    public function index() {
        // Get data of doctors categorized by main services
        $data['services'] = $this->Doctor_model->getDoctorsByService();
        $data['main_services'] = $this->main_services_model->get_all_main_services();

        // Load the view with the data
        $this->load->view('pages/doctors_list', $data);
    }
}
