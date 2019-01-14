<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('auth_model');
		$this->load->model('shop_model');
		$this->load->model('admin_model');
		
	}
	public function index()
	{
		$data['tentang'] = $this->admin_model->tentang();
		$data['daftarkat'] = $this->shop_model->daftarkat()->result();
		$this->load->view('header', $data);
		$this->load->view('auth', $data);
		$this->load->view('footer', $data);
	}
	public function register()
	{
		$this->load->library('form_validation');
		
//        rules validasi
		$capt_reg = $this->input->post('capt-reg');
		$ses_capt_reg = $this->session->userdata('mycaptcha_reg');
		
		$this->form_validation->set_rules('pass-reg', 'Password Form', 'required');
		$this->form_validation->set_rules('con-pass-reg', 'Konfirmasi Password Form', 'matches[pass-reg]');

		if($this->form_validation->run() === false){
			?>
			<script>

				alert('Password Tidak Cocok !');

				history.go(-1);

			</script>
			<?php	
		}else{
				if($this->auth_model->register_model() === true){
						redirect(base_url());
				}else{
					?>
					<script>

						alert('Username Telah Digunakan !');

						history.go(-1);

					</script>
					<?php	
				}
		}
	}
	public function login_user()
	{
			if($this->auth_model->login_model() === true){
				redirect(base_url());

			}else{
				?>
				<script>

					alert('Login Gagal ! Username dan Password Tidak Cocok');

					history.go(-1);

				</script>
				<?php	
			}
	}
}