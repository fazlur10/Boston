<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor_model extends CI_Model {

    public function getDoctorsByService() {
        $this->db->select('main_services.id as service_id, main_services.service_name, main_services.image_path as service_image, doctors.*');
        $this->db->from('main_services');
        $this->db->join('doctors', 'main_services.id = doctors.category_id', 'inner');
        $this->db->order_by('main_services.id', 'ASC');
        $query = $this->db->get();

        $result = [];
        foreach ($query->result_array() as $row) {
            $result[$row['service_id']]['service_name'] = $row['service_name'];
            $result[$row['service_id']]['service_image'] = $row['service_image'];
            $result[$row['service_id']]['doctors'][] = [
                'doctor_name' => $row['doctor_name'],
                'title' => $row['title'],
                'description' => $row['description'],
                'image_path' => $row['image_path']
            ];
        }

        return $result;
    }
}
