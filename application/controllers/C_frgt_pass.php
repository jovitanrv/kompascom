<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_frgt_pass extends CI_Controller {

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
	
	 public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		//$this->form_validation->set_rules('code_captcha','code','required');
		$this->form_validation->set_rules('captcha','Captcha','required');
		
		$data['title'] = 'Single Sign On - Kompas.com';
		if($this->form_validation->run() == false){
			$this->load->view('V_forgot-password',$data);
		}
		else{	
			$email = $this->input->post('email');
			$capt = $this->input->post('captcha');
			$capt2 = $this->input->post('code_captcha');
			$cek = $this->M_akun->login($email);
			if($cek){
				if($capt==$capt2){
					$this->session->set_flashdata('message','<div class="alert alert-success" role="alert" style="width=30px;">
					<b>Sukses!</b> Silahkan cek email anda, kode reset password telah dikirim.</div>');
					$this->load->view('V_forgot-password',$data);
				}
				else{
					$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert" style="width=30px;">
					<b>Error!</b> Kode captcha anda salah.</div>');
					$this->load->view('V_forgot-password',$data);
				}
				
			}
			else{
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert" style="width=30px;">
				<b>Error!</b> User tidak ditemukan.</div>');
				$this->load->view('V_forgot-password',$data);
			}
		}
		
	}
}
