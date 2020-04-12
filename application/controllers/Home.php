<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    // Page Home
    public function index()
    {
        $data = array(
            'title'     => 'Mitsubishi Cimahi Bandung Jawa Barat ',
            'isi'       => 'dashboard/home'
        );

        $this->load->view('layout/wrapper', $data, FALSE);
    }
}
