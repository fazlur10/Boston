<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function index() {
        // Load the 'about' view
        $this->load->view('pages/about');
    }
}