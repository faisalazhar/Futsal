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

	public function hapus_lapangan($id){

		$this->load->model('Model_lapangan');

		// ini buat memanggil fungsi hapus yang ada di model
		$this->Model_lapangan->hapus($id);
		$this->session->set_flashdata('msg', 'Data berhasil dihapus !');
		redirect('/admin/lapangan/');
	}

}
