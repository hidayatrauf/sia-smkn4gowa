<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Default_m');
        security();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';

        $data['siswa'] = $this->Default_m->getAll('siswa', 'id_siswa')->num_rows();
        $data['mapel'] = $this->Default_m->getAll('mapel', 'id_mapel')->num_rows();
        $data['kelas'] = $this->Default_m->getAll('kelas', 'id_kelas')->num_rows();
        $data['absensi'] = $this->Default_m->getAll('absensi', 'id_absensi')->num_rows();
        $data['nilai'] = $this->Default_m->getAll('nilai', 'id_nilai')->num_rows();
        $data['guru'] = $this->Default_m->getAll('guru', 'id_guru')->num_rows();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('templates/foot');
    }

    public function error()
    {
        $data['title'] = 'No Access';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dashboard/no-access', $data);
        $this->load->view('templates/foot');
    }

    public function profil($id_user)
    {
        $data['title'] = 'Profil User';

        $where = ['id_user' => $id_user];
        $on = 'tabel_profil.id_profil = tabel_user.id_profil';
        $data['user'] = $this->Default_m->getWhereTwoTable('tabel_user', 'tabel_profil', $on, $where)->row();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dashboard/profil', $data);
        $this->load->view('templates/foot');
    }

    public function profilguru($id_user)
    {
        $data['title'] = 'Profil Guru';

        $where = ['id_user' => $id_user];
        $on = 'tabel_profil.id_profil = tabel_user.id_profil';
        $data['user'] = $this->Default_m->getWhereTwoTable('tabel_user', 'tabel_profil', $on, $where)->row();
        $data['guru'] = $this->Default_m->getWhere('guru', $where)->row();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dashboard/profilguru', $data);
        $this->load->view('templates/foot');
    }

    public function profilsiswa($id_user)
    {
        $data['title'] = 'Profil Siswa';

        $where = ['id_user' => $id_user];
        $on = 'tabel_profil.id_profil = tabel_user.id_profil';
        $data['user'] = $this->Default_m->getWhereTwoTable('tabel_user', 'tabel_profil', $on, $where)->row();
        $data['siswa'] = $this->Default_m->getWhere('siswa', $where)->row();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dashboard/profilsiswa', $data);
        $this->load->view('templates/foot');
    }

    public function changeprofil($id_user)
    {
        $this->form_validation->set_rules('nama_user', 'nama lengkap', 'required|trim');
        $this->form_validation->set_error_delimiters('<div class="text-danger text-capitalize">', '</div>');

        if ($this->form_validation->run() === FALSE) {

            $data['title'] = 'Edit Profil';
            $where = ['id_user' => $id_user];

            $data['ubah'] = $this->Default_m->getWhere('tabel_user', $where)->row();
            // $on = 'tabel_profil.id_profil = siswa.id_profil';
            // $on1 = 'tabel_user.id_user = siswa.id_user';
            // $data['ubah'] = $this->Default_m->getWhereThreeTable('siswa', 'tabel_profil', 'tabel_user', $on1, $on2, $where)->row();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('dashboard/changeprofil', $data);
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
            $data2 = [
                'nama_user' => $this->input->post('nama_user'),
                'foto' => !empty($_FILES[$name]["name"]) ?  $this->Default_m->upload($path, $type, $size, $name) : $fotoLama
            ];

            $this->Default_m->update('tabel_user', $where, $data);
            // $this->Default_m->update('siswa', $where, $data2);
            if (!empty($_FILES[$name]["name"])) {
                unlink($path . $fotoLama);
            }
            $this->session->set_flashdata('flash', 'Data Berhasil Diubah');
            redirect('dashboard');
        }
    }
    
    public function changeprofilguru($id_user)
    {
        $this->form_validation->set_rules('nama_user', 'nama lengkap', 'required|trim');
        // $this->form_validation->set_rules('kelas_jurusan', 'Kelas Jurusan', 'required|trim');
        $this->form_validation->set_rules('ttl_guru_tempat', 'Tempat Lahir', 'required|trim');
        $this->form_validation->set_rules('ttl_guru_tgl', 'Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules('alamat_guru', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('no_hp_guru', 'Nomor Handphone', 'required|trim');
        $this->form_validation->set_error_delimiters('<div class="text-danger text-capitalize">', '</div>');

        if ($this->form_validation->run() === FALSE) {

            $data['title'] = 'Edit Profil Guru';
            $where = ['id_user' => $id_user];

            $data['ubah2'] = $this->Default_m->getWhere('guru', $where)->row();
            // $on = 'tabel_user.id_user = guru.id_user';
            $data['ubah'] = $this->Default_m->getWhere('tabel_user', $where)->row();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('dashboard/changeprofilguru', $data);
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
            redirect('dashboard');
        }
    }

    public function changeprofilsiswa($id_user)
    {
        $this->form_validation->set_rules('nama_user', 'nama lengkap', 'required|trim');
        $this->form_validation->set_error_delimiters('<div class="text-danger text-capitalize">', '</div>');

        if ($this->form_validation->run() === FALSE) {

            $data['title'] = 'Edit Profil Siswa';
            $where = ['id_user' => $id_user];

            $data['ubah2'] = $this->Default_m->getWhere('siswa', $where)->row();
            // $on = 'tabel_user.id_user = guru.id_user';
            $data['ubah'] = $this->Default_m->getWhere('tabel_user', $where)->row();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('dashboard/changeprofilsiswa', $data);
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
                'nama_siswa' => $this->input->post('nama_user'),
                'ttl_siswa_tempat' => $this->input->post('ttl_siswa_tempat'),
                'kelas_siswa' => $this->input->post('kelas_jurusan'),
                'ttl_siswa_tgl'  => $this->input->post('ttl_siswa_tgl'),
                'alamat_siswa'   => $this->input->post('alamat_siswa'),
                'no_hp_siswa'    => $this->input->post('no_hp_guru'),
                'ayah_siswa'   => $this->input->post('ayah_siswa'),
                'ibu_siswa'   => $this->input->post('ibu_siswa'),
                'ayah_siswa'   => $this->input->post('ayah_siswa'),
                'agama_siswa'   => $this->input->post('agama_siswa'),
                'jk_siswa'       => $this->input->post('jk_siswa')
            ];

            $this->Default_m->update('siswa', $where, $data2);

            $this->session->set_flashdata('flash', 'Data Berhasil Diubah');
            redirect('dashboard');
        }
    }

    public function changepass($id_user)
    {
        $this->form_validation->set_rules('password', 'password', 'required|trim|min_length[8]|matches[passconfirm]');
        $this->form_validation->set_rules('passconfirm', 'konfirmasi password', 'required|trim|min_length[8]|matches[password]');
        $this->form_validation->set_rules('oldpass', 'oldpass', 'required|trim');

        if ($this->form_validation->run() === FALSE) {
            $data['title'] = 'Ubah Password';

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('dashboard/changepass', $data);
            $this->load->view('templates/foot');
        } else {
            $oldpass = $this->input->post('oldpass');
            $password = $this->input->post('password');
            $where = ['id_user' => $id_user];
            $user = $this->Default_m->getWhere('tabel_user', $where)->row();

            if (password_verify($oldpass, $user->password)) {
                $data = ['password' => password_hash($password, PASSWORD_DEFAULT),];
                $this->Default_m->update('tabel_user', $where, $data);
                $this->session->set_flashdata('flash', 'Data Berhasil Diubah');
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('error', 'Password Lama Salah');
                redirect('dashboard/changepass/' . $id_user);
            }
        }
    }
}
