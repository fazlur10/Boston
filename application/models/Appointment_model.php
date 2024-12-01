<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appointment_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Insert appointment into the database
    public function insert_appointment($data) {
        return $this->db->insert('appointments', $data);
    }
}
