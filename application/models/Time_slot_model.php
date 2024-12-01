<?php
defined("BASEPATH") OR exit("No direct script allowed");

class Time_slot_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function get_all_time_slots(){
        $query = $this->db->get("time_slots");
        return $query->result_array();
    }
}