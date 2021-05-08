<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Default_m');
        security();
    }

    public function index()
    {
        $data['title'] = 'Data Guru';
        $on = 'guru.id_user = tabel_user.id_user';
        $data['guru'] = $this->Default_m->getAllTwoTable('guru', 'tabel_user', $on, 'id_guru')->result();
        $data['numguru'] = $this->Default_m->getAll('guru', 'id_guru')->num_rows();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('guru/index', $data);
        $this->load->view('templates/foot');
    }

    public function tambahGuru()
    {
        $this->form_validation->set_rules('username', 'Nomor Induk', 'required|trim|min_length[8]|is_unique[tabel_user.username]');
        $this->form_validation->set_rules('password', 'password', 'required|trim|min_length[8]|matches[passconfirm]');
        $this->form_validation->set_rules('passconfirm', 'konfirmasi password', 'required|trim|min_length[8]|matches[password]');
        $this->form_validation->set_rules('id_profil', 'profil', 'required');
        $this->form_validation->set_error_delimiters('<div class="invalid-feedback text-capitalize">', '</div>');

        if ($this->form_validation->run() === FALSE) {

            $data['title'] = 'Tambah Guru';
            $data['profil'] = $this->Default_m->getAll('tabel_profil', 'id_profil')->result();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('guru/tambah', $data);
            $this->load->view('templates/foot');
        } else {
            $path = './assets/img/';
            $type = 'jpg|jpeg|png';
            $size = 500;
            $name = 'foto';

            $data = [
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'nama_user' => $this->input->post('nama_user'),
                'id_profil' => $this->input->post('id_profil'),
                'aktif' => $this->input->post('aktif'),
                'foto' => !empty($_FILES[$name]["name"]) ?  $this->Default_m->upload($path, $type, $size, $name) : ''
            ];
            $this->Default_m->insert('tabel_user', $data);
            $id_user    = $this->db->insert_id();
            $data2 = [
                'id_user'   => $id_user,
                'nip_guru' => $this->input->post('nip_guru'),
                'nama_guru' => $this->input->post('nama_user'),
                'ttl_guru_tempat' => $this->input->post('ttl_guru_tempat'),
                // 'kelas_jurusan' => $this->input->post('kelas_jurusan'),
                'ttl_guru_tgl'  => $this->input->post('ttl_guru_tgl'),
                'alamat_guru'   => $this->input->post('alamat_guru'),
                'no_hp_guru'    => $this->input->post('no_hp_guru'),
                'status_guru'   => $this->input->post('status_guru'),
                'jk_guru'       => $this->input->post('jk_guru')
            ];

            $this->Default_m->insert('guru', $data2);
            $this->session->set_flashdata('flash', 'Data Berhasil Ditambahkan');

            redirect('guru');
        }
    }

    public function ubahguru($id_user)
    {
        $this->form_validation->set_rules('nama_user', 'nama lengkap', 'required|trim');
        // $this->form_validation->set_rules('kelas_jurusan', 'Kelas Jurusan', 'required|trim');
        $this->form_validation->set_rules('ttl_guru_tempat', 'Tempat Lahir', 'required|trim');
        $this->form_validation->set_rules('ttl_guru_tgl', 'Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules('alamat_guru', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('no_hp_guru', 'Nomor Handphone', 'required|trim');
        $this->form_validation->set_error_delimiters('<div class="text-danger text-capitalize">', '</div>');

        if ($this->form_validation->run() === FALSE) {

            $data['title'] = 'Ganti Profil Guru';
            $where = ['id_user' => $id_user];

            $data['ubah2'] = $this->Default_m->getWhere('guru', $where)->row();
            // $on = 'tabel_user.id_user = guru.id_user';
            $data['ubah'] = $this->Default_m->getWhere('tabel_user', $where)->row();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('guru/ubah', $data);
            $this->load->view('templates/foot');
        } else {
            $path = './assets/img/';
            $type = 'jpg|jpeg|png';
            $size = 5224;
            $name = 'foto';
            $fotoLama = $this->input->post('foto_lama');

            $where = ['id_user' => $id_user];
            $data = [
                'nama_user' => $this->input->post('nama_user'),
                'foto' => !empty($_FILES[$name]["name"]) ?  $this->Default_m->upload($path, $type, $size, $name) : $fotoLama
            ];

            $this->Default_m->update('tabel_user', $where, $data);
            // $this->Default_m->update('siswa', $where, $data2);
            if (!empty($_FILES[$name]["name"])) {
                unlink($path . $fotoLama);
            }
            $data2 = [
                'nama_guru' => $this->input->post('nama_user'),
                'ttl_guru_tempat' => $this->input->post('ttl_guru_tempat'),
                // 'kelas_jurusan' => $this->input->post('kelas_jurusan'),
                'ttl_guru_tgl' => $this->input->post('ttl_guru_tgl'),
                'alamat_guru' => $this->input->post('alamat_guru'),
                'no_hp_guru' => $this->input->post('no_hp_guru'),
                'status_guru' => $this->input->post('status_guru'),
                'jk_guru' => $this->input->post('jk_guru'),
            ];

            $this->Default_m->update('guru', $where, $data2);

            $this->session->set_flashdata('flash', 'Data Berhasil Diubah');
            redirect('guru');
        }
    }

    public function password($id_user)
    {
        $this->form_validation->set_rules('password', 'password', 'required|trim|min_length[8]|matches[passconfirm]');
        $this->form_validation->set_rules('passconfirm', 'konfirmasi password', 'required|trim|min_length[8]|matches[password]');
        $this->form_validation->set_error_delimiters('<div class="invalid-feedback text-capitalize">', '</div>');

        if ($this->form_validation->run() === FALSE) {

            $data['title'] = 'Ubah Password';
            $where = ['id_user' => $id_user];
            $data['ubah'] = $this->Default_m->getWhere('tabel_user', $where)->row();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('guru/password', $data);
            $this->load->view('templates/foot');
        } else {
            $where = ['id_user' => $id_user];
            $data = ['password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)];
            $this->Default_m->update('tabel_user', $where, $data);
            $this->session->set_flashdata('flash', 'Data Berhasil Diubah');
            redirect('guru');
        }
    }

    public function hapus($id_user)
    {
        $where = ['id_user' => $id_user];
        $user = $this->Default_m->getWhere('tabel_user', $where)->row();
        $this->Default_m->delete('tabel_user', $where);
        $this->Default_m->delete('guru', $where);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('flash', 'Data Berhasil Dihapus');
            redirect('guru');
        }
    }

    function getAjaxUser()
    {
        $where = ['id_user' => $this->uri->segment(3)];
        $on = 'tabel_profil.id_profil = tabel_user.id_profil';
        $data['user'] = $this->Default_m->getWhereTwoTable('tabel_user', 'tabel_profil', $on, $where)->row();
        $this->load->view('guru/detail', $data);
    }

}