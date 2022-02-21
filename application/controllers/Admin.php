<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function index()
	{
		$this->load->view('admin/index');
	}

	public function lapangan(){
		// ini buat memuat model
		$this->load->model('Model_lapangan');

		// ini buat memanggil fungsi lihat yang ada di model
		$data['lapangan'] = $this->Model_lapangan->lihat();

		// ini buat nampilin halaman manajemen lapangan

		$this->load->view('admin/head');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/lapangan',$data);
		$this->load->view('admin/foot');
	}

	public function tambah_lapangan(){
		$this->load->view('admin/head');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/form_tambah_lapangan');
		$this->load->view('admin/foot');
	}

	public function edit_lapangan($id){
		$this->load->model('Model_lapangan');

		// ambil satu baris data lapangan yang ingin diedit 
		$data['lapangan'] = $this->Model_lapangan->lihat_by_id($id);

		$this->load->view('admin/head');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/form_edit_lapangan',$data);
		$this->load->view('admin/foot');
	}

	public function simpan_lapangan(){
		$this->load->model('Model_lapangan');
		$nama 		= $this->input->post('nama');
		$status 	= $this->input->post('status');

		$data = array(
			'nama' => $nama,
			'status' => $status
		);

		$this->Model_lapangan->tambah_lapangan($data);
		$this->session->set_flashdata('msg', 'Data berhasil ditambah !');
		redirect('/admin/lapangan/');
	}

	public function simpan_edit_lapangan(){
		$this->load->model('Model_lapangan');
		$nama 		= $this->input->post('nama');
		$status 	= $this->input->post('status');
		$id 		= $this->input->post('id');

		$data = array(
			'nama' => $nama,
			'status' => $status
		);

		$this->Model_lapangan->edit_lapangan($id,$data);
		$this->session->set_flashdata('msg', 'Data berhasil dupdate !');
		redirect('/admin/lapangan/');
	}

	public function hapus_lapangan($id){

		$this->load->model('Model_lapangan');

		// ini buat memanggil fungsi hapus yang ada di model
		$this->Model_lapangan->hapus($id);
		$this->session->set_flashdata('msg', 'Data berhasil dihapus !');
		redirect('/admin/lapangan/');
	}

	public function jadwal(){
		// ini buat memuat model
		$this->load->model('Model_jadwal');

		// ini buat memanggil fungsi lihat yang ada di model
		$data['jadwal'] = $this->Model_jadwal->lihat();

		// ini buat nampilin halaman manajemen lapangan

		$this->load->view('admin/head');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/jadwal',$data);
		$this->load->view('admin/foot');
	}

	public function hapus_jadwal($id){

		$this->load->model('Model_jadwal');

		// ini buat memanggil fungsi hapus yang ada di model
		$this->Model_jadwal->hapus($id);
		$this->session->set_flashdata('msg', 'Data berhasil dihapus !');
		redirect('/admin/jadwal/');
	}

	public function tambah_jadwal(){
		$this->load->model('Model_jadwal');
		$jadwal 	= $this->input->post('jadwal');
		$status 	= $this->input->post('status');

		$data = array(
			'jadwal' => $jadwal,
			'status' => $status
		);

		$this->Model_jadwal->tambah_jadwal($data);
		$this->session->set_flashdata('msg', 'Jadwal berhasil ditambah !');
		redirect('/admin/jadwal/');
	}
}
