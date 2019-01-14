<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('shop_model');
		$this->load->model('cart_model');
		$this->load->model('admin_model');
	}
	public function index(){
		$data['daftarprod'] = $this->shop_model->daftar_produk()->result();
		$data['tentang'] = $this->admin_model->tentang();
		$data['daftarkat'] = $this->shop_model->daftarkat()->result();
		if(isset($_SESSION['id_user'])){
		$data['count'] = $this->cart_model->count_cart_model($_SESSION['id_user']);
		}
		$this->load->view('header', $data);
		$this->load->view('shop', $data);
		$this->load->view('footer', $data);
	}
	public function detail($id){
		$data['detailprod'] = $this->shop_model->detail_model($id)->result();
		$data['daftarkat'] = $this->shop_model->daftarkat()->result();
		$data['tentang'] = $this->admin_model->tentang();
		if(isset($_SESSION['id_user'])){
		$data['count'] = $this->cart_model->count_cart_model($_SESSION['id_user']);
		}
		$this->load->view('header', $data);
		$this->load->view('detail_produk', $data);
		$this->load->view('footer', $data);
	}
	public function category($nm){
		$data['namecat'] = $this->shop_model->category_model($nm)->result();
		$data['daftarkat'] = $this->shop_model->daftarkat()->result();
		$data['tentang'] = $this->admin_model->tentang();
		if(isset($_SESSION['id_user'])){
		$data['count'] = $this->cart_model->count_cart_model($_SESSION['id_user']);
		}
		$this->load->view('header', $data);
		$this->load->view('category', $data);
		$this->load->view('footer', $data);
	}
}