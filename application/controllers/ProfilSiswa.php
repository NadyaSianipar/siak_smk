<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProfilSiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('SiswaSiswa_model');
        $this->load->model('Jurusan_model');
        $this->load->model('Kelas_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        if(!$this->session->userdata("id_siswa")){
            redirect('login');
        }
    }

    public function index()
    {
        $id = $this->session->userdata("id_siswa");
        $data['profil'] = $this->SiswaSiswa_model->getById($id);
        $this->load->view("layout/header", $data);//untuk 15 dan 16 harus dipanggil disetiap layout yang tampil sidebar nya 
        $this->load->view("profilSiswa/vw_profil", $data);
        $this->load->view("layout/footer");
    }

    public function edit($id)
    {
        $data['profil'] = $this->SiswaSiswa_model->getById($id);
        $this->load->view("layout/header", $data);
        $this->load->view("profilSiswa/vw_profil", $data);
        $this->load->view("layout/footer");
    }

    public function do_upload()
    {
        
        $data = [
            'nama_ortu' => $this->input->post('nama_ortu'),
            'alamat_ortu' => $this->input->post('alamat_ortu'),
            'pekerjaan_ortu' => $this->input->post('pekerjaan_ortu'),
            'tmptlahir' => $this->input->post('tmptlahir'),
            'tgllahir' => $this->input->post('tgllahir'),
            'notelp' => $this->input->post('notelp'),
        ];
            $id = $this->input->post('id_siswa');

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
            $this->SiswaSiswa_model->update(['id_siswa' => $id], $data);
            redirect('ProfilSiswa');
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
            $result = $this->SiswaSiswa_model->Check_Old_Password($this->session->userdata('id_siswa'), md5($this->input->post('password_sekarang')));

            if( $result){
                //Update password
                $result = $this->SiswaSiswa_model->update(
                    ['id_siswa'=>$this->session->userdata('id_siswa')], $data);
                if($result > 0){
                    $this->session->set_flashdata('success_msg', 'Password lama tidak Sama');
                    return redirect('ProfilSiswa');
                }else{
                    $this->session->set_flashdata('error_msg', 'Password lama tidak Sama');
                    return redirect('ProfilSiswa');
                }
            }else{
                $this->session->set_flashdata('error_msg', 'Password lama tidak Sama');
                return redirect('ProfilSiswa');
            }
        }
    }
}