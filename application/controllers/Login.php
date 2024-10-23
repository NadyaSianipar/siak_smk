<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Login_model");
        $this->load->model("Guru_model");
        $this->load->model("Admin_model");
        $this->load->model("Siswa_model");
    }

    public function index()
    {
       
        $this->load->view("login/vw_login");
    }
    function aksi_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $whereadmin= array(
            'nama' => $username,
            'password' => md5($password)
        );
        $wheresiswa = array(
            'nisn' => $username,
            'password' => md5($password)
        );
        $whereguru = array(
            'nip' => $username,
            'password' => md5($password)
        );
        $cekadmin = $this->Admin_model->cek_login("admin",$whereadmin)->result();
        if(count($cekadmin) > 0){
            $data_session = array(
                'username' => $username,
                'id_admin' => $cekadmin[0]->id_admin,
                'status' => "login",
                'role' => "admin"
            );
            $this->session->set_userdata($data_session);
            redirect(base_url("Dashboard"));
        }
        
        $ceksiswa = $this->Siswa_model->cek_login("siswa",$wheresiswa)->result();
        if(count($ceksiswa) > 0){
            $data_session = array(
                'username' => $username,
                'id_siswa' => $ceksiswa[0]->id_siswa,
                'status' => "login",
                'role' => "siswa"
            );
            $this->session->set_userdata($data_session);
            redirect(base_url("DashboardSiswa"));
        }
        $cekguru = $this->Guru_model->cek_login("guru",$whereguru)->result();
        if(count($cekguru) > 0){
            $data_session = array(
                'username' => $username,
                'id_guru' => $cekguru[0]->id_guru,
                'status' => "login",
                'role' => "guru"
            );
            $this->session->set_userdata($data_session);
            redirect(base_url("DashboardG"));
        }
        // var_dump($whereguru);
        //redirect(base_url("login"));
        
    }
 
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}