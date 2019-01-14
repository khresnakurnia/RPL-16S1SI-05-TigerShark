<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('user_model');
		$this->load->model('cart_model');
		$this->load->model('shop_model');
	}
	public function detail($id){
		if(!isset($_SESSION['id_user'])){
			redirect(base_url());
		}
		$data['trx'] = $this->user_model->trx_model($id)->row();
		$data['tentang'] = $this->admin_model->tentang();
		$data['detail'] = $this->user_model->detail_model($id)->result();
		if(isset($_SESSION['id_user'])){
			$data['count'] = $this->cart_model->count_cart_model($_SESSION['id_user']);
		}
		$this->load->view('header', $data);
		$this->load->view('detail_trans', $data);
		$this->load->view('footer', $data);
	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url(), 'refresh');
	}
	public function bayar($id){
		if(!isset($_SESSION['id_user'])){
			redirect(base_url());
		}
		$data['trx'] = $this->user_model->trx_model($id)->row();
		$data['tentang'] = $this->admin_model->tentang();
		$data['daftarkat'] = $this->shop_model->daftarkat()->result();
		if(isset($_SESSION['id_user'])){
			$data['count'] = $this->cart_model->count_cart_model($_SESSION['id_user']);
		}
		$this->load->view('header', $data);
		$this->load->view('bayar', $data);
		$this->load->view('footer', $data);
	}
	public function konfirmasi($id)
	{
		if(!isset($_SESSION['id_user'])){
			redirect(base_url());
		}
		if($this->user_model->konfirmasi_model($id) === true){
			redirect(base_url('user/status/'.$_SESSION['id_user']));

		}else{
			?>
			<script>

			alert('Gagal Konfirmasi');

			history.go(-1);

			</script>
			<?php	
		}
	}
	public function status($id)
	{
		if(!isset($_SESSION['id_user'])){
			redirect(base_url());
		}
		$data['status'] = $this->user_model->status_model($id)->result();
		$data['tentang'] = $this->admin_model->tentang();
		$data['daftarkat'] = $this->shop_model->daftarkat()->result();
		if(isset($_SESSION['id_user'])){
			$data['count'] = $this->cart_model->count_cart_model($_SESSION['id_user']);
		}
		$this->load->view('header', $data);
		$this->load->view('status', $data);
		$this->load->view('footer', $data);
	}
	public function info()
	{
		if(!isset($_SESSION['id_user'])){
			redirect(base_url());
		}
		$data['tentang'] = $this->admin_model->tentang();
		$data['users'] = $this->user_model->users($_SESSION['id_user'])->row();
		$data['daftarkat'] = $this->shop_model->daftarkat()->result();
		if(isset($_SESSION['id_user'])){
			$data['count'] = $this->cart_model->count_cart_model($_SESSION['id_user']);
		}
		$this->load->view('header', $data);
		$this->load->view('info', $data);
		$this->load->view('footer', $data);
	}
	public function info_user()
	{
		if(!isset($_SESSION['id_user'])){
			redirect(base_url());
		}
		
			if($this->user_model->info_user_model($_SESSION['id_user']) === true){
				redirect(base_url('user/info'));

			}else{
				?>
				<script>

				alert('Gagal Menyimpan');

				history.go(-1);

				</script>
				<?php	
			}
		
	}
}
