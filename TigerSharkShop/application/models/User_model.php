<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	public function __construct(){
		parent::__construct();
		
	}
	public function detail_model($id){
		$this->db->where('id_trx', $id);
		$this->db->join('produk', 'id_produk = id_produk_cart');
		$this->db->join('kategori', 'id_kategori = kategori_produk');
		$this->db->order_by('waktu_cart', 'DESC');
		$query = $this->db->get('cart');
		return $query;
	}
	public function trx_model($id){
		$this->db->where('id_transaksi', $id);
		$query = $this->db->get('transaksi');
		return $query;
	}
	public function users($id){
		$this->db->where('id_user', $id);
		$query = $this->db->get('user');
		return $query;
	}
	public function konfirmasi_model($id){

		$config['upload_path'] = './upload/konfirmasi';    
		$config['allowed_types'] = 'jpg|png|jpeg';    
		$config['max_size']  = '5000';    
		$config['remove_space'] = TRUE;
		$this->load->library('upload', $config);
		if($this->upload->do_upload('bukti')){
			$file = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			$data = [
			'upload_konfirmasi' => $file['file']['file_name'],
			'rek_konfirmasi' => $this->input->post('rek-buk'),
			'bank_konfirmasi' => $this->input->post('bank-buk'),
			'an_konfirmasi' => $this->input->post('an-buk'),
			'id_kon_trx' => $id
			];
			$this->db->insert('konfirmasi',$data);
			$data_trx = [
			'status_trx' => 1,
		];

		$this->db->where('id_transaksi', $id);
		$this->db->update('transaksi',$data_trx);
			return true;
			
		}else{
				return false;
		}
	}
	public function status_model($id){
		$this->db->where('user_trx', $id);
		$this->db->order_by('waktu_trx', 'DESC');
		$query = $this->db->get('transaksi');
		return $query;
	}
	public function info_user_model($id){
		$data_user_up = [
			'nama_user' => $this->input->post('nama-us'),
			'hp_user' => $this->input->post('hp-us'),
			'email_user' => $this->input->post('email-us'),
			'alamat' => $this->input->post('alamat-us'),
		];

		$this->db->where('id_user', $_SESSION['id_user']);
		$this->db->update('user',$data_user_up);
		return true;
	}
}