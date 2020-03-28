<?php
class M_upload extends CI_Model{

	function simpan_upload($judul,$gambar){
		$hasil=$this->db->query("INSERT INTO tbl_galeri(judul,gambar) VALUES ('$judul','$gambar')");
		return $hasil;
	}
	
}