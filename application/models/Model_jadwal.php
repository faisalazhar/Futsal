<?php
class Model_jadwal extends CI_Model {


	function lihat(){
		return $this->db->query("SELECT * FROM tb_jadwal")->result();
	}

	function hapus($id){
		$this->db->query("DELETE FROM tb_jadwal where id = $id");
	}

	function tambah_jadwal($data){
		$this->db->insert('tb_jadwal', $data);

	}
}