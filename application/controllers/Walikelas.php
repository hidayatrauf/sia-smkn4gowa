<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Walikelas extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Default_m');
        security();
    }

    public function index()
    {
        $data['title'] = 'Wali Kelas';

        $on2 = 'mapel.id_mapel = nilai.id_mapel';
        $on3 = 'siswa.id_siswa = nilai.id_siswa';
        $data['nilai'] = $this->Default_m->getAllThreeTable('nilai', 'mapel', 'siswa', $on2, $on3, 'nilai.id_nilai')->result();

        $on1 = 'guru.id_user = tabel_user.id_user';
        $on = 'guru.id_guru = kelas.id_guru';
        $where = $this->db->get_where('tabel_user', ['id_user' => 
            $this->session->userdata('id_user')])->row_array();
        $where2 = $where['id_user'];
        $data['kelas'] = $this->Default_m->getWhereThreeTableAt('kelas', 'guru','tabel_user', $on,$on1, 'tabel_user.id_user', $where2)->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('walikelas/index', $data);
        $this->load->view('templates/foot');
    }
}