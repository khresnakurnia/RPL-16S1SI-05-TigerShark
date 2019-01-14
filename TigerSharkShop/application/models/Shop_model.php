<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop_model extends CI_Model {
	public function daftar_produk(){
		$this->db->join('kategori', 'id_kategori = kategori_produk');
		$this->db->order_by('tanggal_upload', 'DESC');
		$query = $this->db->get('produk');
		return $query;
	}
	public function detail_barang($id){
		$this->db->where('id_produk', $id);
		$query = $this->db->get('produk');
		return $query;
	}
	public function detail_model($id){
		$this->db->where('id_produk', $id);
		$this->db->join('kategori', 'id_kategori = kategori_produk');
		$query = $this->db->get('produk');
		return $query;
	}
	public function category_model($nm){
		$this->db->where('nama_kategori', $nm);
		$this->db->join('kategori', 'id_kategori = kategori_produk');
		$this->db->order_by('tanggal_upload', 'DESC');
		$query = $this->db->get('produk');
		return $query;
	}
	public function daftarkat(){
		$query = $this->db->get('kategori');
		return $query;
	}
}