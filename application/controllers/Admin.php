<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function index()
	{
		$this->load->view('admin/index');
	}

	public function lapangan(){

		// ini buat ambil data lapangan dari database
		$data['lapangan'] = $this->db->query("SELECT * FROM tb_lapangan")->result();

		// ini buat nampilin halaman manajemen lapangan

		$this->load->view('admin/head');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/lapangan',$data);
		$this->load->view('admin/foot');
	}

}
