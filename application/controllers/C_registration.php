<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_registration extends CI_Controller {

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

		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[akun.email]',[
			'is_unique' => 'Email sudah terdaftar'
		]); //|is_unique[akun.email]
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]|matches[password_conf]',[
			'min_length' => 'password too short',
			'matches' => 'Password dan konfirmasi password harus sama.'
		]);
		$this->form_validation->set_rules('password_conf', 'Konfirmasi Password', 'required|trim|matches[password]');
		$this->form_validation->set_rules('gender','Jenis Kelamin','required',[
			"required" => 'Jenis Kelamin harus diisi'
		]);
		
		$this->form_validation->set_rules('checkbox','cek_box','required');
		$this->form_validation->set_rules('checkbox2','cek_box2','required');
		$this->form_validation->set_rules('code_captcha','code','required');

		$this->form_validation->set_rules('captcha','Capthca','required|trim|matches[code_captcha]',[
			'required'=>'Capthca harus diisi.',
			"matches"=>'Error, kode capthca salah.'
		]);

		if($this->form_validation->run() == false){

			$data['title'] = 'Single Sign On - Kompas.com';
			$this->load->view('V_registrasi',$data);
		}
		else{
			$data = array(
				"email" => $this->input->post('email',true),
				"nama" => $this->input->post('name',true),
				"password" => password_hash($this->input->post('password',true),PASSWORD_DEFAULT),
				"jk" => $this->input->post('gender',true)  
			);
			$this->M_akun->register($data);
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert" style="width=30px;">
			<b>Success!</b> Silahkan cek email anda untuk proses aktifasi akun.
		  </div>');
			redirect('C_registration');
		}
		
	}
}
