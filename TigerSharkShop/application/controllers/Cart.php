<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('cart_model');
		$this->load->model('user_model');
		$this->load->model('admin_model');
		$this->load->model('shop_model');
	}
	public function proses_cart($id)
	{
		
		if($this->cart_model->cart_proses_model($id) === true){
			redirect(base_url('cart/detail/'.$_SESSION['id_user'].'/'));

		}else{
			redirect(base_url('cart/detail/'.$_SESSION['id_user'].'/'));
		}
		
	}
	public function detail($id)
	{
		if(!isset($_SESSION['id_user'])){
			redirect(base_url());
		}
		$data['cart'] = $this->cart_model->cart_model($id)->result();
		$data['tentang'] = $this->admin_model->tentang();
		$data['daftarkat'] = $this->shop_model->daftarkat()->result();
		//$data['tentang'] = $this->admin_model->tentang();
		$data['users'] = $this->user_model->users($_SESSION['id_user'])->row();
		if(isset($_SESSION['id_user'])){
			$data['count'] = $this->cart_model->count_cart_model($id);
			//if($this->user_model->ingat($_SESSION['id_user']) == true){
			//	$data['ingat'] = 1;
			//}else{
			//	$data['ingat'] = 0;
			//}
		}
		$this->load->view('header', $data);
		$this->load->view('cart', $data);
		$this->load->view('footer', $data);
	}
	public function cart_hapus($id)
	{
		if(!isset($_SESSION['id_user'])){
			redirect(base_url());
		}
		if($this->cart_model->cart_hapus_model($id) === true){
			redirect(base_url('cart/detail/'.$_SESSION['id_user']));

		}else{
			?>
			<script>

			alert('Gagal Menghapus');

			history.go(-1);

			</script>
			<?php	
		}
	}
	public function proses_transaksi(){
		if(!isset($_SESSION['id_user'])){
			redirect(base_url());
		}
		if($this->cart_model->proses_transaksi_model() === true){
			$_SESSION['a'] = 0;
			redirect(base_url('user/bayar/'.$_SESSION['id_trx']));
		}else{
			$_SESSION['a'] = 1;
			

			redirect(base_url('cart/cart/'.$_SESSION['id_user'].'/#cart'));	
		}

	}
}