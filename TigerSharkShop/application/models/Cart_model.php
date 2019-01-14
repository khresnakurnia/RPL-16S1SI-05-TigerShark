<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart_model extends CI_Model {
	public function __construct(){
		parent::__construct();
		
	}
	public function cart_proses_model($id){
		$this->db->where('id_user_cart', $_SESSION['id_user']);
		$this->db->where('status_cart', 0);
		$this->db->where('id_produk_cart', $id);
		$query = $this->db->get('cart')->row();

		if(!$query){
			$data_cart = [
			'id_produk_cart' => $id,
			'id_user_cart' => $_SESSION['id_user'],
			'qty_cart' => 0,
			'id_trx' => 0
		];
		$this->db->insert('cart',$data_cart);
			return true;
		}else{
			return false;	
		}
	}
	public function cart_model($id){
		$this->db->select('*');
		$this->db->join('produk', 'id_produk = id_produk_cart');
		$this->db->order_by('waktu_cart', 'DESC');
		$this->db->where('id_user_cart', $id);
		$this->db->where('status_cart', 0);
		$query = $this->db->get('cart');
		return $query;
	}
	public function cart_hapus_model($id){
		if($this->db->delete('cart',array('id_cart'=>$id))){
			return true;
		}else{
			return false;
		}

	}
	public function count_cart_model($id){
		$this->db->where('id_user_cart', $id);
		$this->db->where('status_cart', 0);
		$this->db->from('cart');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function proses_transaksi_model(){
		$this->db->select('*');
		$this->db->join('produk', 'id_produk = id_produk_cart');
		$this->db->order_by('waktu_cart', 'DESC');
		$this->db->where('id_user_cart', $_SESSION['id_user']);
		$this->db->where('status_cart', 0);
		$query = $this->db->get('cart')->result();
		$now = 0;
		foreach ($query as $q) {
			if($this->input->post('qty'.$q->id_cart) <= $q->stok_produk){
				$now = $q->stok_produk - $this->input->post('qty'.$q->id_cart);
				if($now < 0){
					$now = 0;
				}
				$data_user = [
					'qty_cart' => $this->input->post('qty'.$q->id_cart),
					'status_cart' => 1,
					
				];

				$this->db->where('id_cart', $q->id_cart);
				$this->db->update('cart',$data_user);
				
			}else{
				return false;
			}
		}
		$id_trx = "trx".$_SESSION['id_user'].date("Ymd").rand();
		$jum = $this->input->post('tot')+rand(10,100);
		$data_user_in = [
			
			'id_transaksi' => $id_trx,
			'jumlah_trx' => $jum,
			'user_trx' => $_SESSION['id_user'],
			'metode_trx' => $this->input->post('optradio')
		];
		$this->db->insert('transaksi',$data_user_in);

		foreach ($query as $q) {
			if($this->input->post('qty'.$q->id_cart) <= $q->stok_produk){
				$data_user = [
					'id_trx' => $id_trx
				];

				$this->db->where('id_cart', $q->id_cart);
				$this->db->update('cart',$data_user);
			}else{
				return false;
			}
		}
		foreach ($query as $q) {
			if($this->input->post('qty'.$q->id_cart) <= $q->stok_produk){
				$now = $q->stok_produk - $this->input->post('qty'.$q->id_cart);
				if($now < 0){
					$now = 0;
				}
				
				$data_st = [
					'stok_produk' => $now
				];
				$this->db->where('id_produk', $q->id_produk_cart);
				$this->db->update('produk',$data_st);
			}else{
				return false;
			}
		}
		$data_user_up = [
			'nama_user' => $this->input->post('nama-kon'),
			'hp_user' => $this->input->post('hp-kon'),
			'email_user' => $this->input->post('email-kon'),
			'alamat' => $this->input->post('alamat-kon'),
		];

		$this->db->where('id_user', $_SESSION['id_user']);
		$this->db->update('user',$data_user_up);
		$_SESSION['id_trx'] = $id_trx;
		$_SESSION['jml_trx'] = $jum;
		return true;
	}
}