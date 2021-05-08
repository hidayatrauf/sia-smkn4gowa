<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nilai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Default_m');
        security();
    }

    public function index()
    {
        $data['title'] = 'Data Nilai Siswa';

            if ((isset($_GET['tahun']) && $_GET['tahun'] != '')  && (isset($_GET['semester']) && $_GET['semester'] != '')){
                $tahun = $_GET['tahun'];
                $semester = $_GET['semester'];
            } else {
                $tahun = (isset($_GET['tahun']) && $_GET['tahun'] != '');
                $semester = (isset($_GET['semester']) && $_GET['semester'] != '');
            }

        $data['user'] = $this->db->get_where('tabel_user', ['username' => $this->session->userdata('username')])->row();

        $on1 = 'mapel.id_mapel = nilai.id_mapel';
        $on2 = 'siswa.id_siswa = nilai.id_siswa';
        $on3 = 'tabel_user.id_user = nilai.id_user';
        $on4 = 'tabel_user.id_user = nilai.id_nilai';
        $select = 'nilai.id_siswa, nilai.id_guru, nilai.id_kelas, nilai.nama_mapel, guru.nama_guru, kelas.nama_kelas, kelas.kelas_jurusan, kelas.kode_jurusan';
        $where = $this->db->get_where('tabel_user', ['id_user' => 
            $this->session->userdata('id_user')])->row_array();
        $where2 = $where['id_user'];
        
        $atsiswa = 'siswa.id_user';
        $onsiswa = 'tabel_user.id_user = siswa.id_user';
        $siswa = $this->Default_m->getWhereTwoTableAt('siswa', 'tabel_user', $onsiswa, $atsiswa, $where2)->row_array();
        $idsiswa = $siswa['id_siswa'];
        $data['idsiswa'] = $siswa['id_siswa'];
            
        $at = 'nilai.id_user';
        $at2 = 'nilai.id_siswa';
        $atand1 = 'nilai.thn_ajaran';
        $atand2 = 'nilai.semester';
        
        $data['nilai'] = $this->Default_m->getWhereFourTableNilaiAnd('nilai', 'mapel', 'siswa', 'tabel_user', $on1, $on2, $on3, $atand1, $atand2, $tahun, $semester)->result();
        $data['whereNilai'] = $this->Default_m->getWhereFourTableNilai('nilai', 'mapel', 'siswa', 'tabel_user', $on1, $on2, $on3, $at, $at2, $where2, $idsiswa)->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('nilai/index', $data);
        $this->load->view('templates/foot');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('id_siswa', 'Nama Siswa', 'required');
        $this->form_validation->set_rules('id_mapel', 'Nama Mata Pelajaran', 'required');
        $this->form_validation->set_rules('id_siswa', 'Nama Siswa', 'required');
        $this->form_validation->set_rules('id_user', 'Nama Guru', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        $this->form_validation->set_rules('semester', 'Semester', 'required');
        $this->form_validation->set_rules('thn_ajaran', 'Tahun Ajaran', 'required');
        $this->form_validation->set_error_delimiters('<div class="invalid-feedback text-capitalize">', '</div>');

        if ($this->form_validation->run() === FALSE){

        $data['title'] = 'Tambah Nilai';
        // $on1 = 'mapel.id_mapel = nilai.id_mapel';
        // $on2 = 'siswa.id_siswa = nilai.id_siswa';
        // $on3 = 'tabel_user.id_user = nilai.id_user';
        // $data['nilai'] = $this->Default_m->getAllFourTable('nilai', 'mapel', 'siswa', 'tabel_user', $on1, $on2, $on3, 'id_nilai')->result();
        $data['user'] = $this->db->get_where('tabel_user', ['username' => 
            $this->session->userdata('username')])->row();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('nilai/tambah', $data);
        $this->load->view('templates/foot');
	    } else {
	    	$data	= [
                'id_mapel'  => $this->input->post('id_mapel'),
                'id_siswa'  => $this->input->post('id_siswa'),
                'id_user'   => $this->input->post('id_user'),
	    		'kelas'	=> $this->input->post('kelas'),
	    		'semester'	=> $this->input->post('semester'),
                'thn_ajaran' => $this->input->post('thn_ajaran'),
                'tgs_1'  => $this->input->post('tgs_1'),
                'tgs_2'  => $this->input->post('tgs_2'),
                'tgs_3'  => $this->input->post('tgs_3'),
                'uts'  => $this->input->post('uts'),
	    		'uas'	=> $this->input->post('uas')
	    	];

            $this->Default_m->insert('nilai', $data);
            $this->session->set_flashdata('flash', 'Data Berhasil Ditambahkan');
            redirect('nilai');
	    }
    }

    public function ubah($id_nilai)
    {
        $this->form_validation->set_rules('id_siswa', 'Nama Siswa', 'required');
        $this->form_validation->set_rules('id_mapel', 'Nama Mata Pelajaran', 'required');
        $this->form_validation->set_rules('id_siswa', 'Nama Siswa', 'required');
        $this->form_validation->set_rules('id_user', 'Nama Guru', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        $this->form_validation->set_rules('semester', 'Semester', 'required');
        $this->form_validation->set_rules('thn_ajaran', 'Tahun Ajaran', 'required');
        $this->form_validation->set_error_delimiters('<div class="invalid-feedback text-capitalize">', '</div>');

        if ($this->form_validation->run() === FALSE){

        $data['title'] = 'Tambah Nilai';
        $where = ['id_nilai' => $id_nilai];
        $data['ubah']   = $this->Default_m->getWhere('nilai', $where)->row();
        $data['user'] = $this->db->get_where('tabel_user', ['username' => 
            $this->session->userdata('username')])->row();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('nilai/ubah', $data);
        $this->load->view('templates/foot');
        } else {
            $where = ['id_nilai' => $id_nilai];
            $data   = [
                'id_mapel'  => $this->input->post('id_mapel'),
                'id_siswa'  => $this->input->post('id_siswa'),
                'id_user'   => $this->input->post('id_user'),
                'kelas' => $this->input->post('kelas'),
                'semester' => $this->input->post('semester'),
                'thn_ajaran' => $this->input->post('thn_ajaran'),
                'tgs_1'  => $this->input->post('tgs_1'),
                'tgs_2'  => $this->input->post('tgs_2'),
                'tgs_3'  => $this->input->post('tgs_3'),
                'uts'  => $this->input->post('uts'),
                'uas'   => $this->input->post('uas')
            ];

            $this->Default_m->update('nilai', $where, $data);
            $this->session->set_flashdata('flash', 'Data Berhasil Ditambahkan');
            redirect('nilai');
        }
    }

    public function hapus($id_nilai)
    {
        $where = ['id_nilai' => $id_nilai];
        $this->Default_m->delete('nilai', $where);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('flash', 'Data Berhasil Dihapus');
            redirect('nilai');
        }
    }
}