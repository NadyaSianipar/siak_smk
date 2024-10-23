<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model');
        $this->load->model('Jurusan_model');
        $this->load->model('Kelas_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Siswa";
        $data['siswa'] = $this->Siswa_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("siswa/vw_siswa", $data);
        $this->load->view("layout/footer", $data);
    }

    function tambah()
    {
        $data['judul'] = "Halaman Tambah Siswa";
        $data['jurusan'] = $this->Jurusan_model->get();
        $data['kelas'] = $this->Kelas_model->get_kelas();
        $this->form_validation->set_rules('nama', 'Nama Siswa', 'required', [
            'required' => 'Nama Siswa Wajib diisi',
        ]);
        $this->form_validation->set_rules('email', 'email ', 'required', [
            'required' => 'Email Wajib diisi',
        ]);
        $this->form_validation->set_rules('kelas', 'Kelas ', 'required', [
            'required' => 'Kelas Wajib diisi',
        ]);
        $this->form_validation->set_rules('jurusan', 'Jurusan ', 'required', [
            'required' => 'Jurusan Wajib diisi',
        ]);
        $this->form_validation->set_rules('semester', 'Semester ', 'required', [
            'required' => 'Semester Wajib diisi',
        ]);
        $this->form_validation->set_rules('tingkat', 'tingkat ', 'required', [
            'required' => 'tingkat Wajib diisi',
        ]);
        $this->form_validation->set_rules('nisn', 'NISN', 'required', [
            'required' => 'NISN Wajib diisi',
        ]);
        $this->form_validation->set_rules('password', 'Password ', 'required', [
            'required' => 'Password wajib diisi',
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat wajib diisi',
        ]);
        $this->form_validation->set_rules('jk', 'Jenis Kelamin ', 'required', [
            'required' => 'Jenis Kelamin Wajib diisi',
        ]);
        $this->form_validation->set_rules('agama', 'Agama', 'required', [
            'required' => 'Agama Wajib diisi',
        ]);
        $this->form_validation->set_rules('tmptlahir', 'Tempat Lahir ', 'required', [
            'required' => 'Tempat Lahir Wajib Diisi',
        ]);
        $this->form_validation->set_rules('tgllahir', 'Tanggal Lahir ', 'required', [
            'required' => 'Tanggal Lahir Wajib Diisi',
        ]);
        $this->form_validation->set_rules('notelp', 'No Telepon ', 'required', [
            'required' => 'No Telepon Wajib Diisi',
        ]);
        $this->form_validation->set_rules('thnajaran', 'Tahun Ajaran ', 'required', [
            'required' => 'Tahun Ajaran Wajib Diisi',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("siswa/vw_tambah_siswa", $data);
            $this->load->view("layout/footer");
        }
        else {
            $data = [
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'kelas' => $this->input->post('kelas'),
                'jurusan' => $this->input->post('jurusan'),
                'semester' => $this->input->post('semester'),
                'tingkat' => $this->input->post('tingkat'),
                'nisn' => $this->input->post('nisn'),
                'password' => $this->input->post('password'),
                'alamat' => $this->input->post('alamat'),
                'jk' => $this->input->post('jk'),
                'agama' => $this->input->post('agama'),
                'tmptlahir' => $this->input->post('tmptlahir'),
                'tgllahir' => $this->input->post('tgllahir'),
                'notelp' => $this->input->post('notelp'),
                'thnajaran' => $this->input->post('thnajaran'),
            ];
            $this->Siswa_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Siswa Berhasil Ditambah!
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>');
            redirect('Siswa');
        }
    }
    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Data Siswa";
        $data['siswa'] = $this->Siswa_model->getById($id);
        $data['jurusan'] = $this->Jurusan_model->get();
        $data['kelas'] = $this->Kelas_model->get_kelas();
        $this->form_validation->set_rules('nama', 'Nama Siswa', 'required', [
            'required' => 'Nama Siswa Wajib diisi',
        ]);
        $this->form_validation->set_rules('email', 'email ', 'required', [
            'required' => 'Email Wajib diisi',
        ]);
        $this->form_validation->set_rules('kelas', 'Kelas ', 'required', [
            'required' => 'Kelas Wajib diisi',
        ]);
        $this->form_validation->set_rules('jurusan', 'Jurusan ', 'required', [
            'required' => 'Jurusan Wajib diisi',
        ]);
        $this->form_validation->set_rules('semester', 'Semester ', 'required', [
            'required' => 'Semester Wajib diisi',
        ]);
        $this->form_validation->set_rules('tingkat', 'tingkat ', 'required', [
            'required' => 'tingkat Wajib diisi',
        ]);
        $this->form_validation->set_rules('nisn', 'NISN', 'required', [
            'required' => 'NISN Wajib diisi',
        ]);
        $this->form_validation->set_rules('password', 'Password ', 'required', [
            'required' => 'Password wajib diisi',
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat wajib diisi',
        ]);
        $this->form_validation->set_rules('jk', 'Jenis Kelamin ', 'required', [
            'required' => 'Jenis Kelamin Wajib diisi',
        ]);
        $this->form_validation->set_rules('agama', 'Agama', 'required', [
            'required' => 'Agama Wajib diisi',
        ]);
        $this->form_validation->set_rules('tmptlahir', 'Tempat Lahir ', 'required', [
            'required' => 'Tempat Lahir Wajib Diisi',
        ]);
        $this->form_validation->set_rules('tgllahir', 'Tanggal Lahir ', 'required', [
            'required' => 'Tanggal Lahir Wajib Diisi',
        ]);
        $this->form_validation->set_rules('thnajaran', 'Tahun Ajaran ', 'required', [
            'required' => 'Tahun Ajaran Wajib Diisi',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("siswa/vw_ubah_siswa", $data);
            $this->load->view("layout/footer");
        }
        else {
            $data = [
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'kelas' => $this->input->post('kelas'),
                'jurusan' => $this->input->post('jurusan'),
                'semester' => $this->input->post('semester'),
                'tingkat' => $this->input->post('tingkat'),
                'nisn' => $this->input->post('nisn'),
                'password' => $this->input->post('password'),
                'alamat' => $this->input->post('alamat'),
                'jk' => $this->input->post('jk'),
                'agama' => $this->input->post('agama'),
                'tmptlahir' => $this->input->post('tmptlahir'),
                'tgllahir' => $this->input->post('tgllahir'),
                'notelp' => $this->input->post('notelp'),
                'thnajaran' => $this->input->post('thnajaran'),
            ];
            $where = ['id_siswa' => $id];

        // Mendapatkan tingkat siswa sebelum diperbarui
            $previousTingkat = $this->Siswa_model->getTingkatSiswa($id);

            $this->Siswa_model->update($where, $data);

        // Mendapatkan tingkat siswa setelah diperbarui
            $currentTingkat = $this->Siswa_model->getTingkatSiswa($id);

        // Memeriksa apakah tingkat siswa berubah dan harus diperbarui
            if ($currentTingkat != $previousTingkat && $currentTingkat > $previousTingkat) {
                $this->Siswa_model->naik_tingkat($id);
                echo "Tingkat siswa berhasil diperbarui.";
            }
            else {
                echo "Data siswa berhasil diperbarui, tingkat siswa tidak berubah.";
            }

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Siswa Berhasil Diubah!
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>');
            redirect('Siswa');
        }
    }
    function detail($id)
    {
        $data['judul'] = "Halaman Detail Siswa";
        $data['siswa'] = $this->Siswa_model->getById($id);
        $this->load->view("layout/header", $data);
        $this->load->view("siswa/vw_detail_siswa", $data);
        $this->load->view("layout/footer", $data);
    }

    function hapus($id)
    {
        $this->Siswa_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Siswa Gagal Dihapus!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>');
        }
        else {
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Siswa Berhasil Dihapus!
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>');
        }
        redirect('Siswa');
    }


}
?>