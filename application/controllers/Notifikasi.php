<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notifikasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Notifikasi_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Data Notifikasi";
        $data['notifikasi'] = $this->Notifikasi_model->get();
        $this->load->view("layout/header");
        $this->load->view("notifikasi/vw_notifikasi", $data);
        $this->load->view("layout/footer");
    }
}
?>