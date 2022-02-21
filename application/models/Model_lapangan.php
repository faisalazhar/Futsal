<?php
class Model_lapangan extends CI_Model {


	function lihat(){
		return $this->db->query("SELECT * FROM tb_lapangan")->result();
	}

	function lihat_by_id($id){
		return $this->db->query("SELECT * FROM tb_lapangan where id = $id")->row();
	}

	function hapus($id){
		$this->db->query("DELETE FROM tb_lapangan where id = $id");
	}

	function tambah_lapangan($data){
		$this->db->insert('tb_lapangan', $data);
		
	}

	function edit_lapangan($id,$data){
		$this->db->where('id', $id);
		$this->db->update('tb_lapangan', $data);
		
	}



}