<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_akun');
		$this->load->library('form_validation');
	}
	
	 public function index(){
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email',[
			'required'=> 'Email harus diisi.'
		]);
		$this->form_validation->set_rules('password', 'Password', 'required|trim',[
			'required'=> 'Password harus diisi.'
		]);

		if($this->form_validation->run() == false){

			$data['title'] = 'Single Sign On - Kompas.com';
			$this->load->view('V_login',$data);
		}
		else{
			$email = $this->input->post('email');
			$pass = $this->input->post('password');

			$akun  = $this->M_akun->login($email);
			
			if($akun){
				if(password_verify($pass, $akun['password'])){
					
					$split_name = explode(" ",$akun['nama']);
					$data = [
						'email'=> $akun['email'],
						'name'=> $akun['nama'],
						'f_name' => $split_name[0],
						'l_name' => $split_name[1]
					];
					$this->session->set_userdata($data);
					// echo $split_name[0];
					// echo $split_name[1];
					redirect('Home_C_log'); //controller
				}
				else{
					$this->session->set_flashdata('notfound','<div class="alert alert-danger" role="alert" style="width=30px;">
					<b>Error!</b>  User tidak ditemukan / Password anda salah </div>');
					redirect('C_login');		
				}
			}
			else{
				$this->session->set_flashdata('notfound','<div class="alert alert-danger" role="alert" style="width=30px;">
				<b>Error!</b>  User tidak ditemukan / Password anda salah </div>');
				redirect('C_login');
			}

		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('Home_C');
	}
}
