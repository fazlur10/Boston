<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appointment extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load the model for appointments
        $this->load->model('Appointment_model');
    }

    public function book() {
        // Check if the request is POST
        if ($this->input->method() === 'post') {
            // Get form data
            $inputName = $this->input->post('inputName');
            $inputPhone = $this->input->post('inputPhone');
            $inputService = $this->input->post('inputService');
            $inputDate = $this->input->post('inputDate');
            $inputTime = $this->input->post('inputTime');
            $inputMessage = $this->input->post('inputMessage');
            
            // Prepare data to insert
            $data = [
                'name' => $inputName,
                'phone' => $inputPhone,
                'service_type' => $inputService,
                'appointment_date' => $inputDate,
                'appointment_time' => $inputTime,
                'message' => $inputMessage,
                'status' => 0, // Default status (e.g., not confirmed)
                'language' => 'en' // Assuming English language for now
            ];

            // Insert data into the database using the model
            $isInserted = $this->Appointment_model->insert_appointment($data);
            
            // Respond back to AJAX
            if ($isInserted) {
                echo json_encode(['success' => true]);
            } else {
                echo json_encode(['success' => false]);
            }
        }
    }
}
