<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mapel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Default_m');
        security();
    }

    public function index()
    {
        $data['title'] = 'Mata Pelajaran';
        $data['mapel'] = $this->Default_m->getAll('mapel', 'id_mapel')->result();
        $data['num'] = $this->Default_m->getAll('mapel', 'id_mapel')->num_rows();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('mapel/index', $data);
        $this->load->view('templates/foot');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nama_mapel', 'Mata Pelajaran', 'required|is_unique[mapel.nama_mapel]');
        $this->form_validation->set_error_delimiters('<div class="invalid-feedback text-capitalize">', '</div>');

        if ($this->form_validation->run() === FALSE){

        $data['title'] = 'Tambah Mata Pelajaran';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('mapel/tambah', $data);
        $this->load->view('templates/foot');
	    } else {
	    	$data	= [
	    		'nama_mapel'	=> $this->input->post('nama_mapel')
	    	];

            $this->Default_m->insert('mapel', $data);
            $this->session->set_flashdata('flash', 'Data Berhasil Ditambahkan');
            redirect('mapel');
	    }
    }

    public function ubah($id_mapel)
    {
        $this->form_validation->set_rules('nama_mapel', 'Mata Pelajaran', 'required|is_unique[mapel.nama_mapel]');
        $this->form_validation->set_error_delimiters('<div class="invalid-feedback text-capitalize">', '</div>');

        if ($this->form_validation->run() === FALSE){

        $data['title'] = 'Ubah Mata Pelajaran';
        $where	= ['id_mapel' => $id_mapel];
        $on2    = 'kelas.id_kelas = mapel.idkelas';
        $data['ubah'] = $this->Default_m->getWhere('mapel', $where)->row();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('mapel/ubah', $data);
        $this->load->view('templates/foot');
	    } else {
	    	$where	= ['id_mapel' => $id_mapel];
            // $nama_mapel = ['nama_mapel' => $this->input->post('nama_mapel')];
            $data   = [ 'nama_mapel'    => $this->input->post('nama_mapel')];

            $this->Default_m->update('mapel', $where, $data);
            $this->session->set_flashdata('flash', 'Data Berhasil Diubah');
            redirect('mapel');
	    }
    }

    public function hapus($id_mapel)
    {
        $where = ['id_mapel' => $id_mapel];
        $this->Default_m->delete('mapel', $where);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('flash', 'Data Berhasil Dihapus');
            redirect('mapel');
        }
    }
}