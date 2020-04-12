<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Promo extends CI_Controller
{

    // Page Home
    public function index()
    {
        $data = array(
            'title'     => 'Promo Mitsubishi Cimahi',
            'isi'       => '2020/promo'
        );

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function promopajero()
    {
        $data = array(
            'title'     => 'Promo Mitsubishi Pajero Cimahi',
            'isi'       => '2020/promopajero'
        );

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function promoxpander()
    {
        $data = array(
            'title'     => 'Promo Mitsubishi Xpander Cimahi',
            'isi'       => '2020/promoxpander'
        );

        $this->load->view('layout/wrapper', $data, FALSE);
    }
}
