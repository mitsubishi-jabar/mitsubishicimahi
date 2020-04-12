<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Simulasi extends CI_Controller
{

    // Page Home
    public function index()
    {
        $data = array(
            'title'     => 'Simulasi Kredit Mitsubishi Cimahi',
        );

        $this->load->view('simulasi', $data, FALSE);
    }
}
