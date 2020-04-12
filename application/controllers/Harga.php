<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Harga extends CI_Controller
{

    // Page Home
    public function index()
    {
        $data = array(
            'title'     => 'Mitsubishi Cimahi',
            'isi'       => 'dashboard/harga'
        );

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function xpander()
    {
        $data = array(
            'title'     => 'Mitsubishi Xpander Cimahi',
            'isi'       => 'dashboard/xpander'
        );

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function pajero()
    {
        $data = array(
            'title'     => 'Mitsubishi Pajero Sport Cimahi',
            'isi'       => 'dashboard/pajero'
        );

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function eclipse()
    {
        $data = array(
            'title'     => 'Mitsubishi Eclipse Cross Cimahi',
            'isi'       => 'dashboard/eclipse'
        );

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function xpandercross()
    {
        $data = array(
            'title'     => 'Mitsubishi Xpander Cross Cimahi',
            'isi'       => 'dashboard/xpandercross'
        );

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function triton()
    {
        $data = array(
            'title'     => 'Mitsubishi All new Triton Cimahi',
            'isi'       => 'dashboard/triton'
        );

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function l300()
    {
        $data = array(
            'title'     => 'Mitsubishi L300 Cimahi',
            'isi'       => 'dashboard/l300'
        );

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function fe()
    {
        $data = array(
            'title'     => 'Mitsubishi Colt Diesel Cimahi',
            'isi'       => 'dashboard/fe'
        );

        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function sim()
    {
        $data = array(
            'title'     => 'Promo Mitsubishi Pajero Cimahi',
        );

        $this->load->view('dashboard/sim', $data, FALSE);
    }
}
