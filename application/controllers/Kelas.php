<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Default_m');
        security();
    }

    public function index()
    {
        $data['title'] = 'Data Kelas';
        $on = 'guru.id_guru = kelas.id_guru';
        $data['kelas'] = $this->Default_m->getAllTwoTable('kelas', 'guru', $on, 'id_kelas')->result();
        $data['num'] = $this->Default_m->getAll('kelas', 'id_kelas')->num_rows();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kelas/index', $data);
        $this->load->view('templates/foot');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('id_guru', 'Wali Kelas', 'required|trim|is_unique[kelas.id_guru');
        $this->form_validation->set_rules('nama_kelas', 'Kelas', 'required');
        $this->form_validation->set_rules('kelas_jurusan', 'Jurusan', 'required');
        $this->form_validation->set_rules('kode_jurusan', 'Kode Jurusan', 'required');
        $this->form_validation->set_error_delimiters('<div class="invalid-feedback text-capitalize">', '</div>');

        if ($this->form_validation->run() === FALSE) {

            $data['title'] = 'Tambah Kelas';
            $data['guru'] = $this->db->query("SELECT * FROM `guru` WHERE `id_guru` NOT IN (SELECT `id_guru` FROM `kelas`)")->result();

            // percobaan
            // $on = 'guru.id_guru = kelas.id_guru';
            // $data['guru'] = $this->Default_m->getAllTwoTable('guru', 'kelas', $on, 'id_kelas')->result();
            // $idguru = [$this->input->post('id_kelas')];
            // $data['kelasnot'] = $this->db->where_not_in('guru', $idguru)->result();
            // akhir percobaan

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('kelas/tambah', $data);
            $this->load->view('templates/foot');
        } else {
            $data    = [
                'id_guru'    => $this->input->post('id_guru'),
                'nama_kelas'    => $this->input->post('nama_kelas'),
                'kelas_jurusan'    => $this->input->post('kelas_jurusan'),
                'kode_jurusan'    => $this->input->post('kode_jurusan')
            ];

            $this->Default_m->insert('kelas', $data);
            $this->session->set_flashdata('flash', 'Data Berhasil Ditambahkan');
            redirect('kelas');
        }
    }

    public function ubah($id_kelas)
    {
        $this->form_validation->set_rules('id_guru', 'Wali Kelas', 'required');
        $this->form_validation->set_rules('nama_kelas', 'Kelas', 'required');
        $this->form_validation->set_rules('kelas_jurusan', 'Jurusan', 'required');
        $this->form_validation->set_rules('kode_jurusan', 'Kode Jurusan', 'required');
        $this->form_validation->set_error_delimiters('<div class="invalid-feedback text-capitalize">', '</div>');

        if ($this->form_validation->run() === FALSE) {

            $data['title'] = 'Ubah Kelas';
            $where            = ['id_kelas' => $id_kelas];
            $on     = 'guru.id_guru = kelas.id_guru';
            $data['ubah'] = $this->Default_m->getWhereTwoTable('kelas', 'guru', $on, $where)->row();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('kelas/ubah', $data);
            $this->load->view('templates/foot');
        } else {
            $where            = ['id_kelas' => $id_kelas];
            $data = [
                'id_guru'    => $this->input->post('id_guru'),
                'nama_kelas'    => $this->input->post('nama_kelas'),
                'kelas_jurusan' => $this->input->post('kelas_jurusan'),
                'kode_jurusan'  => $this->input->post('kode_jurusan')
            ];

            $this->Default_m->update('kelas', $where, $data);
            $this->session->set_flashdata('flash', 'Data Berhasil Diubah');
            redirect('kelas');
        }
    }

    public function hapus($id_kelas)
    {
        $where = ['id_kelas' => $id_kelas];
        $this->Default_m->delete('kelas', $where);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('flash', 'Data Berhasil Dihapus');
            redirect('kelas');
        }
    }
}
