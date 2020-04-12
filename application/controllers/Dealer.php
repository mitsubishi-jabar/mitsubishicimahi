<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dealer extends CI_Controller
{

    // Page Home
    public function index()
    {
        $data = array(
            'title'     => 'Mitsubishi Mahligai Cimahi',
            'isi'       => 'dashboard/dealer'
        );

        $this->load->view('layout/wrapper', $data, FALSE);
    }
}
