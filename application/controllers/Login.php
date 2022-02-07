<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function index()
	{
		$data['title'] = "Login";
		$this->load->view('index',$data);
	}

	public function admin()
	{
		// ambil nilai dari form login
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$password = md5($password);
		// periksa username dan password ke database
		$login = $this->db->query("SELECT * FROM tb_user where username = '$username' and password = '$password'")->num_rows();


		if ($login > 0) {
			echo "Login sukses !";
		} else {
			echo "Login gagal !";
		}
	}

}
