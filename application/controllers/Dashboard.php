<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->database();

        // Get total number of teachers
        $sql = "SELECT COUNT(*) as total FROM guru";
        $result = $this->db->query($sql);

        if ($result->num_rows() > 0) {
            $row = $result->row();
            $total_guru = $row->total;
        }
        else {
            $total_guru = 0;
        }

        // Get total number of students
        $sql = "SELECT COUNT(*) as total FROM siswa";
        $result = $this->db->query($sql);

        if ($result->num_rows() > 0) {
            $row = $result->row();
            $total_siswa = $row->total;
        }
        else {
            $total_siswa = 0;
        }

        // Get total number of jurusan
        $sql = "SELECT COUNT(*) as total FROM jurusan";
        $result = $this->db->query($sql);

        if ($result->num_rows() > 0) {
            $row = $result->row();
            $total_jurusan = $row->total;
        }
        else {
            $total_jurusan = 0;
        }
         // Get total number of kelas
        $sql = "SELECT COUNT(*) as total FROM kelas";
        $result = $this->db->query($sql);

        if ($result->num_rows() > 0) {
            $row = $result->row();
            $total_kelas = $row->total;
        }
        else {
            $total_kelas = 0;
        }
        // Get total number of perusahaan
        $sql = "SELECT COUNT(*) as total FROM perusahaan";
        $result = $this->db->query($sql);

        if ($result->num_rows() > 0) {
            $row = $result->row();
            $total_perusahaan = $row->total;
        }
        else {
            $total_perusahaan = 0;
        }
        // Get total number of mapel
        $sql = "SELECT COUNT(*) as total FROM mapel";
        $result = $this->db->query($sql);

        if ($result->num_rows() > 0) {
            $row = $result->row();
            $total_mapel = $row->total;
        }
        else {
            $total_mapel = 0;
        }
        // Get total number of pelajaran
        $sql = "SELECT COUNT(*) as total FROM jadwalpelajaran";
        $result = $this->db->query($sql);

        if ($result->num_rows() > 0) {
            $row = $result->row();
            $total_pelajaran = $row->total;
        }
        else {
            $total_pelajaran = 0;
        }
        // Get total number of kp
        $sql = "SELECT COUNT(*) as total FROM kp";
        $result = $this->db->query($sql);

        if ($result->num_rows() > 0) {
            $row = $result->row();
            $total_kp = $row->total;
        }
        else {
            $total_kp = 0;
        }
         // Get total number of akademik
        $sql = "SELECT COUNT(*) as total FROM layananakademik";
        $result = $this->db->query($sql);

        if ($result->num_rows() > 0) {
            $row = $result->row();
            $total_akademik = $row->total;
        }
        else {
            $total_akademik = 0;
        }

        // Pass data to view file
        $data = array(
            'total_guru' => $total_guru,
            'total_siswa' => $total_siswa,
            'total_jurusan' => $total_jurusan,
            'total_kelas' => $total_kelas,
            'total_perusahaan' => $total_perusahaan,
            'total_mapel' => $total_mapel,
            'total_pelajaran' => $total_pelajaran,
            'total_kp' => $total_kp,
            'total_akademik' => $total_akademik
        );

        $this->load->view("layout/header");
        $this->load->view("dashboard/vw_dashboard", $data);
        $this->load->view("layout/footer");

        $this->db->close();
    }
}