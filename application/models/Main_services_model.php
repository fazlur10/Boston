<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_services_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Method to fetch all services
    public function get_all_main_services() {
        $query = $this->db->get('main_services');
        return $query->result_array();
    }
}
