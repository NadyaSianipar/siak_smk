<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelajaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pelajaran_model');
        $this->load->model('Guru_model');
        $this->load->model('Kelas_model');
        $this->load->model('Mapel_model');

    }

    public function index()
    {
        $data['judul'] = "Halaman Data Pelajaran";
        $data['pelajaran'] = $this->Pelajaran_model->get_jadwal();
        $this->load->view("layout/header", $data);
        $this->load->view("pelajaran/vw_pelajaran", $data);
        $this->load->view("layout/footer");
    }

    function tambah()
    {
        $data['judul'] = "Halaman Tambah Data Pelajaran";
        $data['pelajaran'] = $this->Pelajaran_model->get_jadwal();
        $data['guru'] = $this->Guru_model->get();
        $data['kelas'] = $this->Kelas_model->get();
        $data['mapel'] = $this->Mapel_model->get();
        $this->form_validation->set_rules('id_mapel', 'Nama Pelajaran', 'required', [
            'required' => 'Nama Pelajaran Wajib diisi',
        ]);
        $this->form_validation->set_rules('id_guru', 'Nama Guru', 'required', [
            'required' => 'Nama Guru Wajib diisi',

        ]);
        $this->form_validation->set_rules('tingkat', 'Tingkat', 'required', [
            'required' => 'Tingkat Wajib diisi',

        ]);
        $this->form_validation->set_rules('id_kelas', 'Kelas', 'required', [
            'required' => 'Kelas Wajib diisi',
        ]);
        $this->form_validation->set_rules('jammasuk', 'Jam Masuk ', 'required', [
            'required' => 'Jam Masuk Wajib diisi',
        ]);
        $this->form_validation->set_rules('jamselesai', 'Jam Selesai ', 'required', [
            'required' => 'Jam Selesai Wajib diisi',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("pelajaran/vw_tambah_pelajaran", $data);
            $this->load->view("layout/footer");
        }
        else {
            $id_jadwal = $this->input->post('id_jadwal');
            $id_kelas = $this->input->post('id_kelas');
            $id_mapel = $this->input->post('id_mapel');
            $tingkat = $this->input->post('tingkat');
            $hari = $this->input->post('hari');
            $jammasuk = $this->input->post('jammasuk');
            $jamselesai = $this->input->post('jamselesai');
            $id_guru = $this->input->post('id_guru');

        // Cek apakah ada guru dengan hari dan jam yang sama
            if ($this->Pelajaran_model->isGuruAvailable($hari, $jammasuk, $jamselesai, $id_guru)) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Guru dengan hari dan jam yang sama sudah ada!
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>');
                redirect('Pelajaran');
            }
            else {
                $data = [
                    'id_mapel' => $this->input->post('id_mapel'),
                    'id_guru' => $id_guru,
                    'id_kelas' => $this->input->post('id_kelas'),
                    'tingkat' => $tingkat,
                    'hari' => $hari,
                    'jammasuk' => $jammasuk,
                    'jamselesai' => $jamselesai,
                ];
                $this->Pelajaran_model->insert($data);
                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Pelajaran Berhasil Ditambah!
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>');
                redirect('Pelajaran');
            }
        }
    }
    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Pelajaran";
        $data['pelajaran'] = $this->Pelajaran_model->getById($id);
        $data['guru'] = $this->Guru_model->get();
        $data['kelas'] = $this->Kelas_model->get();
        $data['mapel'] = $this->Mapel_model->get();
        $this->form_validation->set_rules('id_mapel', 'Nama Pelajaran', 'required', [
            'required' => 'Nama Pelajaran Wajib diisi',
        ]);
        $this->form_validation->set_rules('id_guru', 'Nama Guru', 'required', [
            'required' => 'Nama Guru Wajib diisi',

        ]);
        $this->form_validation->set_rules('tingkat', 'Tingkat', 'required', [
            'required' => 'Tingkat Wajib diisi',

        ]);
        $this->form_validation->set_rules('id_kelas', 'Nama Kelas ', 'required', [
            'required' => 'Nama Kelas Wajib diisi',
        ]);
        $this->form_validation->set_rules('jammasuk', 'Jam Masuk ', 'required', [
            'required' => 'Jam Masuk Wajib diisi',
        ]);
        $this->form_validation->set_rules('jamselesai', 'Jam Selesai ', 'required', [
            'required' => 'Jam Selesai Wajib diisi',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("pelajaran/vw_ubah_pelajaran", $data);
            $this->load->view("layout/footer");
        }
        else {
            $data = [
                'id_mapel' => $this->input->post('id_mapel'),
                'id_guru' => $this->input->post('id_guru'),
                'id_kelas' => $this->input->post('id_kelas'),
                'tingkat' => $this->input->post('tingkat'),
                'hari' => $this->input->post('hari'),
                'jammasuk' => $this->input->post('jammasuk'),
                'jamselesai' => $this->input->post('jamselesai'),
            ];

            $hari = $this->input->post('hari');
            $jammasuk = $this->input->post('jammasuk');
            $jamselesai = $this->input->post('jamselesai');
            $id_guru = $this->input->post('id_guru');

        // Cek apakah guru tersedia pada hari dan jam yang sama
            if ($this->Pelajaran_model->isGuruAvailable($hari, $jammasuk, $jamselesai, $id_guru)) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Guru dengan hari dan jam yang sama sudah ada!
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>');
                redirect('Pelajaran');
            }

            $where = ['id_jadwal' => $id];

            $this->Pelajaran_model->update($where, $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Pelajaran Berhasil Diubah!
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      </div>');
            redirect('Pelajaran');
        }

    }
    function hapus($id)
    {
        $this->Pelajaran_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Pelajaran Gagal Dihapus!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>');
        }
        else {
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Pelajaran Berhasil Dihapus!
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>');
        }
        redirect('Pelajaran');
    }
}
?>