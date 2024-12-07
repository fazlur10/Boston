<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Service_model extends CI_Model
{
    // Get main service details
    public function get_main_service($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('main_services');
        return $query->row_array(); // Returns a single row as an associative array
    }

    // Get sub-services by service_type
    public function get_sub_services($service_type)
    {
        $this->db->where('service_type', $service_type);
        $query = $this->db->get('sub_services');
        return $query->result_array(); // Returns multiple rows as an array
    }

    // Get details of a specific sub-service
    public function get_sub_service($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('sub_services');
        return $query->row_array(); // Returns a single row as an associative array
    }

}

