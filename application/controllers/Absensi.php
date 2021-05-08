<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Absensi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Default_m');
        security();
    }

    public function index()
    {
        $data['title'] = 'Daftar Hadir Siswa';

            if ((isset($_GET['bulan']) && $_GET['bulan'] != '') && (isset($_GET['tahun']) && $_GET['tahun'] != '')  && (isset($_GET['kelas_jurusan']) && $_GET['kelas_jurusan'] != '')){
                $bulan = $_GET['bulan'];
                $tahun = $_GET['tahun'];
                $kejur = $_GET['kelas_jurusan'] ;
              $kelas= $this->Default_m->getWhereOne('kelas', 'kelas.id_kelas', $kejur)->row();
              $kelaslengkap = $kelas->nama_kelas.' '.$kelas->kelas_jurusan.' '. $kelas->kode_jurusan;
                $bulantahun = $bulan.$tahun;
                $kelas_jurusan = $kejur;
            } else {
                $bulan = (isset($_GET['bulan']) && $_GET['bulan'] != '');
                $tahun = (isset($_GET['tahun']) && $_GET['tahun'] != '');
                $bulantahun = $bulan.$tahun;
                $kelas_jurusan = (isset($_GET['kelas_jurusan']) && $_GET['kelas_jurusan'] != '');
            }

        $where = $bulantahun;
        $on = 'siswa.id_siswa = absensi.id_siswa';
        // $data['absensi'] = $this->Default_m->getWhereAbsensi('absensi', 'siswa', $on, 'bulantahun', 'siswa.id_siswa')->result();
        $data['absensi'] = $this->db->query("SELECT * FROM absensi
            INNER JOIN siswa ON siswa.id_siswa = absensi.id_siswa
            INNER JOIN kelas ON kelas.id_kelas = siswa.id_kelas
            WHERE absensi.bulantahun='$bulantahun'
            AND kelas.id_kelas='$kelas_jurusan'
            ORDER BY siswa.nama_siswa ASC")->result();
        $data['whereabsensi'] = $this->db->query("SELECT * FROM absensi
            INNER JOIN siswa ON siswa.id_siswa = absensi.id_siswa
            WHERE absensi.bulantahun='$bulantahun'
            ORDER BY siswa.nama_siswa ASC")->row();
        $where = $this->db->get_where('tabel_user', ['id_user' => 
            $this->session->userdata('id_user')])->row_array();
        $where2 = $where['id_user'];

        $atsiswa = 'siswa.id_user';
        $onsiswa = 'tabel_user.id_user = siswa.id_user';
        $siswa = $this->Default_m->getWhereTwoTableAt('siswa', 'tabel_user', $onsiswa, $atsiswa, $where2)->row_array();
        $idsiswa = $siswa['id_siswa'];

        $onuser_siswa = 'absensi.id_siswa';
        $data['whereabsensi'] = $this->Default_m->getWhereOne('absensi', $onuser_siswa, $idsiswa)->result();
        $data['num'] = $this->Default_m->getAll('absensi', 'id_absensi')->num_rows();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('absensi/index', $data);
        $this->load->view('templates/foot');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('id_siswa', 'Nama Siswa', 'required');
        $this->form_validation->set_rules('izin', 'Jumlah Izin', 'required');
        $this->form_validation->set_rules('bulan', 'Bulan', 'required');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required');
        $this->form_validation->set_rules('sakit', 'Mata Pelajaran', 'required');
        $this->form_validation->set_rules('alfa', 'Mata Pelajaran', 'required');
        $this->form_validation->set_error_delimiters('<div class="invalid-feedback text-capitalize">', '</div>');

        if ($this->form_validation->run() === FALSE){

        $data['title'] = 'Tambah Absensi';
        $data['siswa'] = $this->Default_m->getAll('siswa', 'id_siswa')->result();
        $data['kelas'] = $this->Default_m->getAll('kelas', 'id_kelas')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('absensi/tambah', $data);
        $this->load->view('templates/foot');
	    } else {
            $bulan = $this->input->post('bulan');
            $tahun = $this->input->post('tahun');
            $bulantahun = $bulan.$tahun;
	    	$data	= [
                'id_siswa'  => $this->input->post('id_siswa'),
                'bulantahun' => $bulantahun,
	    		'izin'		=> $this->input->post('izin'),
                'sakit' => $this->input->post('sakit'),
	    		'alfa'	=> $this->input->post('alfa')
	    	];

            $this->Default_m->insert('absensi', $data);
            $this->session->set_flashdata('flash', 'Data Berhasil Ditambahkan');
            redirect('absensi');
	    }
    }

    public function ubah($id_absensi)
    {
        $this->form_validation->set_rules('id_siswa', 'Nama Siswa', 'required');
        // $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        $this->form_validation->set_rules('izin', 'Jumlah Izin', 'required');
        $this->form_validation->set_rules('bulan', 'Bulan', 'required');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required');
        $this->form_validation->set_rules('sakit', 'Mata Pelajaran', 'required');
        $this->form_validation->set_rules('alfa', 'Mata Pelajaran', 'required');
        $this->form_validation->set_error_delimiters('<div class="invalid-feedback text-capitalize">', '</div>');

        if ($this->form_validation->run() === FALSE){

        $data['title'] = 'Ubah Absensi';
        $on            = 'absensi.id_siswa = siswa.id_siswa';
        $where			= ['id_absensi' => $id_absensi];
        $data['ubah'] = $this->Default_m->getWhereTwoTable('absensi', 'siswa', $on, $where)->row();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('absensi/ubah', $data);
        $this->load->view('templates/foot');
	    } else {
	    	$where			= ['id_absensi' => $id_absensi];
            $bulan = $this->input->post('bulan');
            $tahun = $this->input->post('tahun');
            $bulantahun = $bulan.$tahun;
            $data   = [
                'id_siswa'  => $this->input->post('id_siswa'),
                // 'kelas' => $this->input->post('kelas'),
                'bulantahun' => $bulantahun,
                'izin'      => $this->input->post('izin'),
                'sakit' => $this->input->post('sakit'),
                'alfa'  => $this->input->post('alfa')
            ];

            $this->Default_m->update('absensi', $where, $data);
            $this->session->set_flashdata('flash', 'Data Berhasil Diubah');
            redirect('absensi');
	    }
    }

    public function hapus($id_absensi)
    {
        $where = ['id_absensi' => $id_absensi];
        $this->Default_m->delete('absensi', $where);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('flash', 'Data Berhasil Dihapus');
            redirect('absensi');
        }
    }
}