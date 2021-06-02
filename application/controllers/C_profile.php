<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_profile extends CI_Controller {

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
		$data['title'] = 'Single Sign On - Kompas.com';
		$data['name'] = $this->session->userdata('name');
		$data['f_name'] = $this->session->userdata('f_name');
		$data['l_name'] = $this->session->userdata('l_name');
		$this->load->view('V_profile',$data);
	}


	 public function profile()
	{
		$this->form_validation->set_rules('nama_d','nd','required',[
			'required' => 'Nama depan harus diisi.'
		]);
		$this->form_validation->set_rules('nama_b','nb','required',[
			'required' => 'Nama belakang harus diisi.'
		]);

		if($this->form_validation->run() == false){
			$data['title'] = 'Single Sign On - Kompas.com';
			$data['name'] = $this->session->userdata('name');
			$data['f_name'] = $this->session->userdata('f_name');
			$data['l_name'] = $this->session->userdata('l_name');
			$this->load->view('V_profile',$data);
		}
		else{
			//sini
			$f_name = $this->input->post('nama_d',true);
			$l_name = $this->input->post('nama_b',true);
			$name = $f_name." ".$l_name;
			
			$data = array (
				"name" => $name,
				"email" => $this->session->userdata('email')
			);
			//get data yg baru diupdate
			$data = [
				'email'=> $this->session->userdata('email'),
				'name'=> $name,
				'f_name' => $f_name,
				'l_name' => $l_name
			];
			$this->session->set_userdata($data);

			$this->M_akun->update_prof($data);
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert" style="height=30px;">
			<b>Success!</b> Data profile anda telah diperbaharui.</div>');
			redirect('C_profile');
		}
	}
	
	public function pswrd()
	{
		$this->form_validation->set_rules('password','pswd','required',[
			'required' => 'Password harus diisi.'
		]);

		$this->form_validation->set_rules('password_new','pswdn','required|matches[password_confirmation]',[
			'required' => 'Password harus diisi.',
			'matches' => 'Konfirmasi password tidak sama.'
		]);
		
		$this->form_validation->set_rules('password_confirmation','pswdc','required',[
			'required' => 'Konfirmasi password harus diisi.'
		]);
		if($this->form_validation->run() == false){
			$data['title'] = 'Single Sign On - Kompas.com';
			$data['name'] = $this->session->userdata('name');
			$data['f_name'] = $this->session->userdata('f_name');
			$data['l_name'] = $this->session->userdata('l_name');
			$this->load->view('V_profile',$data);
		}
		else{
			//sini
			$pass = $this->input->post('password');
			$pass_n = $this->input->post('password_new');
			$pass_c = $this->input->post('password_confirmation');

			$email = $this->session->userdata('email');
			$akun  = $this->M_akun->login($email);
			
			if(password_verify($pass,$akun['password'])){
				$data = [
					'email' => $email,
					'pass' => password_hash($pass_n,PASSWORD_DEFAULT)
				];
				$this->M_akun->update_pass($data);
				$this->session->set_flashdata('notfound','<div class="alert alert-success" role="alert" style="width=30px;">
				<b>Success!</b>  Password berhasil diupdate </div>');
				redirect('C_profile/pswrd');
			}
			else{
				$this->session->set_flashdata('notfound','<div class="alert alert-danger" role="alert" style="width=30px;">
				<b>Error!</b>  Password lama salah </div>');
				redirect('C_profile/pswrd');
			}
		}
	}
}
