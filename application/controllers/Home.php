<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');  // Load the URL helper
        $this->load->model('main_services_model');  // Use lowercase to load the model
        $this->load->model('time_slot_model');
        $this->load->library('session');
    }

    public function index() {
        $data['main_services'] = $this->main_services_model->get_all_main_services();  
        $time_slots = $this->time_slot_model->get_all_time_slots(); 

        foreach ($time_slots as &$slot) {
            $slot['formatted_time'] = date("h:i A", strtotime($slot['slot_time']));  // Format the time
        }

        $data['time_slots'] = $time_slots;
        $this->load->view('pages/index', $data);  // Pass services data to the view
    }
}
