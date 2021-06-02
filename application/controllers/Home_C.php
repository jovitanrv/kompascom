<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_C extends CI_Controller {

	public function index()
	{
		$data['populer'] = $this->Read_Berita_Populer();
		$data['terkini'] = $this->Read_Berita_Terkini();
		$data['sorotan'] = $this->Read_Berita_Sorotan();
		$data['headline'] = $this->Read_Berita_Headline();
		$this->load->view('Template/Header_V');
		$this->load->view('Content/Beranda_V', $data);
		$this->load->view('Template/Footer_V');
	}

	public function Read_Berita_Populer(){
		$data =  $this->Berita_M->Get_Berita_Populer();
		return $data;
	}

	public function Read_Berita_Terkini(){
		$data =  $this->Berita_M->Get_Berita_Terkini();
		return $data;
	}

	public function Read_Berita_Sorotan(){
		$data =  $this->Berita_M->Get_Berita_Sorotan();
		return $data;
	}

	public function Read_Berita_Headline(){
		$data =  $this->Berita_M->Get_Berita_Headline();
		return $data;
	}
}
