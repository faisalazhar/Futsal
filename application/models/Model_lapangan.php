<?php
class Model_lapangan extends CI_Model {


	function lihat(){
		return $this->db->query("SELECT * FROM tb_lapangan")->result();
	}

	function hapus($id){
		$this->db->query("DELETE FROM tb_lapangan where id = $id");
	}

	function tambah_lapangan($data){
		$this->db->insert('tb_lapangan', $data);
		
	}



}