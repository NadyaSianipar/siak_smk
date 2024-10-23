<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Guru_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        if(!$this->session->userdata("id_guru")){
            redirect('login');
        }
    }

    public function index()
    {
        $data['profil'] = $this->Guru_model->getById(1);
        $id= $this->session->userdata("id_guru");
        $data['profil'] = $this->Guru_model->getById($id);
        $this->load->view("layout/header", $data);
        $this->load->view("profil/vw_profil", $data);
        $this->load->view("layout/footer");
    }

    public function edit($id)
    {
        $data['profil'] = $this->Guru_model->getById($id);
        $this->load->view("layout/header");
        $this->load->view("profil/vw_profil", $data);
        $this->load->view("layout/footer");
    }

    public function do_upload()
    {
        
        $data = [
            'tmptlahir' => $this->input->post('tmptlahir'),
            'tgllahir' => $this->input->post('tgllahir'),
            'notelp' => $this->input->post('notelp'),
        ];
            $id = $this->input->post('id_guru');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Profil Berhasil Diubah!</div>');
            

            $config['upload_path'] = './assets/img/profil'; // Set path direktori untuk upload
            $config['allowed_types'] = 'gif|jpg|jpeg|png'; // Tentukan tipe file yang diizinkan
            $config['max_size'] = 20480000; // Set ukuran maksimal file (dalam kilobyte)
            $config['overwrite'] = true;
            $config['encrypt_name'] = true; // Enkripsi nama file yang diupload

            if(!is_dir($config['upload_path'])){
                mkdir($config['upload_path']);
            }
            
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            
            if ($this->upload->do_upload('gambar')) {
                $gambar = $this->upload->data();
                $file_name = $gambar['file_name'];
                $data['gambar'] = $file_name;
                
                // Lakukan tugas tambahan dengan file yang diupload
                // Misalnya, simpan nama file ke dalam database, ubah ukuran file, dll.
                // var_dump($this->upload->data());
                echo "File berhasil diupload.";                
            } else {
                // File upload gagal
                $error = $this->upload->display_errors();
                echo $error;                
            }
            $this->Guru_model->update(['id_guru' => $id], $data);
            redirect('Profil');
    }
    public function changePassword()
    {
        // Validasi form
        $this->form_validation->set_rules('password_sekarang', 'Password Sekarang', 'required');
        $this->form_validation->set_rules('password_baru', 'Password Baru', 'required');
        $this->form_validation->set_rules('konfirmasi_password', 'Masukkan Ulang Password Baru', 'required');

        if ($this->form_validation->run() == FALSE) {

        } else {

            // ubah data
            $data = array(
                'password' => md5($this->input->post('password_baru'))

            );
            // cek password lama
            $result = $this->Guru_model->Check_Old_Password($this->session->userdata('id_guru'), md5($this->input->post('password_sekarang')));

            if( $result){
                //Update password
                $result = $this->Guru_model->update(
                    ['id_guru'=>$this->session->userdata('id_guru')], $data);
                if($result > 0){
                    $this->session->set_flashdata('success_msg', 'Password lama tidak Sama');
                    return redirect('Profil');
                }else{
                    $this->session->set_flashdata('error_msg', 'Password lama tidak Sama');
                    return redirect('Profil');
                }
            }else{
                $this->session->set_flashdata('error_msg', 'Password lama tidak Sama');
                return redirect('Profil');
            }
        }
    }
}