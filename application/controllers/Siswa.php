<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Default_m');
        security();
    }

    public function index()
	{
        $data['title'] = 'Data Siswa';

        $on = 'kelas.id_kelas = siswa.id_kelas';
        $data['siswa'] = $this->Default_m->getAllTwoTable('siswa', 'kelas', $on, 'id_siswa')->result();
        $data['numsiswa'] = $this->Default_m->getAllTwoTable('siswa', 'kelas', $on,'id_siswa')->num_rows();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/index', $data);
        $this->load->view('templates/foot');
	}

    public function tambahSiswa()
    {
        $this->form_validation->set_rules('username', 'Nomor Induk', 'required|trim|min_length[10]|is_unique[tabel_user.username]');
        $this->form_validation->set_rules('password', 'password', 'required|trim|min_length[8]|matches[passconfirm]');
        $this->form_validation->set_rules('passconfirm', 'konfirmasi password', 'required|trim|min_length[8]|matches[password]');
        $this->form_validation->set_rules('id_profil', 'profil', 'required');
        $this->form_validation->set_rules('id_kelas', 'Kelas', 'required');
        $this->form_validation->set_error_delimiters('<div class="invalid-feedback text-capitalize">', '</div>');

        if ($this->form_validation->run() === FALSE) {

            $data['title'] = 'Tambah Siswa';
            $data['profil'] = $this->Default_m->getAll('tabel_profil', 'id_profil')->result();
            $data['kelas'] = $this->Default_m->getAll('kelas', 'id_kelas')->result();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('siswa/tambahsiswa', $data);
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
                'id_kelas'  => $this->input->post('id_kelas'),
                'nis_siswa' => $this->input->post('username'),
                'nama_siswa' => $this->input->post('nama_user'),
                'ttl_siswa_tempat' => $this->input->post('ttl_siswa_tempat'),
                // 'kelas_siswa' => $this->input->post('kelas_jurusan'),
                'ttl_siswa_tgl'  => $this->input->post('ttl_siswa_tgl'),
                'alamat_siswa'   => $this->input->post('alamat_siswa'),
                'no_hp_siswa'    => $this->input->post('no_hp_siswa'),
                'ayah_siswa'   => $this->input->post('ayah_siswa'),
                'ibu_siswa'   => $this->input->post('ibu_siswa'),
                'ayah_siswa'   => $this->input->post('ayah_siswa'),
                'agama_siswa'   => $this->input->post('agama_siswa'),
                'jk_siswa'       => $this->input->post('jk_siswa')
            ];

            $this->Default_m->insert('siswa', $data2);
            $this->session->set_flashdata('flash', 'Data Berhasil Ditambahkan');

            redirect('siswa');
        }
    }

    public function ubahsiswa($id_user)
    {
        $this->form_validation->set_rules('nama_user', 'nama lengkap', 'required|trim');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required|trim');
        $this->form_validation->set_error_delimiters('<div class="text-danger text-capitalize">', '</div>');

        if ($this->form_validation->run() === FALSE) {

            $data['title'] = 'Ganti Profil Siswa';
            $where = ['id_user' => $id_user];

            $data['ubah2'] = $this->Default_m->getWhere('siswa', $where)->row();
            // $on = 'tabel_user.id_user = guru.id_user';
            $data['ubah'] = $this->Default_m->getWhere('tabel_user', $where)->row();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('siswa/ubahsiswa', $data);
            $this->load->view('templates/foot');
        } else {
            $path = './assets/img/';
            $type = 'jpg|jpeg|png';
            $size = 5224;
            $name = 'foto';
            $fotoLama = $this->input->post('foto_lama');

            $where = ['id_user' => $id_user];
            $data = [
                'id_profil' => $this->input->post('id_profil'),
                'username' => $this->input->post('username'),
                'nama_user' => $this->input->post('nama_user'),
                'foto' => !empty($_FILES[$name]["name"]) ?  $this->Default_m->upload($path, $type, $size, $name) : $fotoLama
            ];

            $this->Default_m->update('tabel_user', $where, $data);
            // $this->Default_m->update('siswa', $where, $data2);
            if (!empty($_FILES[$name]["name"])) {
                unlink($path . $fotoLama);
            }
            $data2 = [
                'nama_siswa' => $this->input->post('nama_user'),
                'nis_siswa' => $this->input->post('username'),
                'ttl_siswa_tempat' => $this->input->post('ttl_siswa_tempat'),
                'id_kelas' => $this->input->post('kelas'),
                'ttl_siswa_tgl'  => $this->input->post('ttl_siswa_tgl'),
                'alamat_siswa'   => $this->input->post('alamat_siswa'),
                'no_hp_siswa'    => $this->input->post('no_hp_siswa'),
                'ayah_siswa'   => $this->input->post('ayah_siswa'),
                'ibu_siswa'   => $this->input->post('ibu_siswa'),
                'ayah_siswa'   => $this->input->post('ayah_siswa'),
                'agama_siswa'   => $this->input->post('agama_siswa'),
                'jk_siswa'       => $this->input->post('jk_siswa')
            ];

            $this->Default_m->update('siswa', $where, $data2);

            $this->session->set_flashdata('flash', 'Data Berhasil Diubah');
            redirect('siswa');
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
            $this->load->view('siswa/password', $data);
            $this->load->view('templates/foot');
        } else {
            $where = ['id_user' => $id_user];
            $data = ['password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)];
            $this->Default_m->update('tabel_user', $where, $data);
            $this->session->set_flashdata('flash', 'Data Berhasil Diubah');
            redirect('siswa');
        }
    }

    public function hapus($id_user)
    {
        $where = ['id_user' => $id_user];
        $user = $this->Default_m->getWhere('tabel_user', $where)->row();
        $this->Default_m->delete('tabel_user', $where);
        $this->Default_m->delete('siswa', $where);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('flash', 'Data Berhasil Dihapus');
            redirect('siswa');
        }
    }

    function getAjaxUser()
    {
        $where = ['id_user' => $this->uri->segment(3)];
        $on = 'tabel_profil.id_profil = tabel_user.id_profil';
        $data['user'] = $this->Default_m->getWhereTwoTable('tabel_user', 'tabel_profil', $on, $where)->row();
        $this->load->view('siswa/detail', $data);
    }

}