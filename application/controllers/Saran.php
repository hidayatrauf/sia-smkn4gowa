<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Saran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Default_m');
        security();
    }

    public function index()
    {
        $data['title'] = 'Kotak Saran';
        $data['saran'] = $this->Default_m->getAll('saran', 'id_saran')->result();
        $where = $this->db->get_where('tabel_user', ['id_user' => 
            $this->session->userdata('id_user')])->row_array();
        $kepada_saran = $where['nama_user'];
        // $order = 'saran.kepada_saran' $kepada_saran;
        $at1 = 'saran.kepada_saran';
        $at2 = 'saran.nama_siswa';
        $data['whereSaran'] = $this->Default_m->getWhereOrTwo('saran', $at1, $at2, $kepada_saran, $kepada_saran)->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('saran/index', $data);
        $this->load->view('templates/foot');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('kepada_saran', 'Ditujukan Kepada', 'required');
        $this->form_validation->set_rules('isi_saran', 'Isi Saran', 'required');
        $this->form_validation->set_error_delimiters('<div class="invalid-feedback text-capitalize">', '</div>');

        if ($this->form_validation->run() === FALSE){

        $data['title'] = 'Tambah Saran';

        $data['user'] = $this->db->get_where('tabel_user', ['username' => 
            $this->session->userdata('username')])->row_array();
        $data['guru'] = $this->Default_m->getAll('guru', 'id_guru')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('saran/tambah', $data);
        $this->load->view('templates/foot');
	    } else {
	    	$data	= [
                'nama_siswa'    => $this->input->post('nama_siswa'),
                'kepada_saran'    => $this->input->post('kepada_saran'),
                'isi_saran'    => $this->input->post('isi_saran'),
	    		'date_created'	=> date('Y-m-d H:i:s')
	    	];

            $this->Default_m->insert('saran', $data);
            $this->session->set_flashdata('flash', 'Data Berhasil Ditambahkan');
            redirect('saran');
	    }
    }

    public function ubah($id_saran)
    {
        $this->form_validation->set_rules('kepada_saran', 'Ditujukan Kepada', 'required');
        $this->form_validation->set_rules('isi_saran', 'Isi Saran', 'required');
        $this->form_validation->set_error_delimiters('<div class="invalid-feedback text-capitalize">', '</div>');

        if ($this->form_validation->run() === FALSE){

        $data['title'] = 'Ubah Saran';
        $data['user'] = $this->db->get_where('tabel_user', ['username' => 
            $this->session->userdata('username')])->row_array();
        $where	= ['id_saran' => $id_saran];
        $data['ubah'] = $this->Default_m->getWhere('saran', $where)->row();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('saran/ubah', $data);
        $this->load->view('templates/foot');
	    } else {
	    	$where	= ['id_saran' => $id_saran];
            $data   = [
                'nama_siswa'    => $this->input->post('nama_siswa'),
                'kepada_saran'    => $this->input->post('kepada_saran'),
                'isi_saran'    => $this->input->post('isi_saran'),
                'date_created'  => date('Y-m-d H:i:s')
            ];

            $this->Default_m->update('saran', $where, $data);
            $this->session->set_flashdata('flash', 'Data Berhasil Diubah');
            redirect('saran');
	    }
    }

    public function hapus($id_saran)
    {
        $where = ['id_saran' => $id_saran];
        $this->Default_m->delete('saran', $where);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('flash', 'Data Berhasil Dihapus');
            redirect('saran');
        }
    }
    function getAjaxUser()
    {
        $where = ['id_saran' => $this->uri->segment(3)];
        $data['saran'] = $this->Default_m->getWhere('saran', $where)->row();
        $this->load->view('saran/detail', $data);
    }
}