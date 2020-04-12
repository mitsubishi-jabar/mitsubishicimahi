<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller
{

    // Page Home
    public function index()
    {
        $data = array(
            'title'     => 'Gallery Mitsubishi Cimahi',
            'isi'       => 'dashboard/gallery'
        );

        $this->load->view('layout/wrapper', $data, FALSE);
    }
}
