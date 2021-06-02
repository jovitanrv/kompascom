<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_Admin_C extends CI_Controller {

	public function index()
	{
		$data['berita'] = $this->Read_Berita();
		$this->load->view('Admin/Template/Header_V');
		$this->load->view('Admin/Content/Berita_V', $data);
		$this->load->view('Admin/Template/Footer_V');
	}

	public function Create_Berita() {
		$uploads = $this->Berita_M->do_upload('gambar');
		if($uploads['result'] == 'success') {
			$data = [
				"judul" => $_POST['judul'],
				"kategori" => $_POST['kategori'],
				"isi" => $_POST['isi'],
				"gambar" => $uploads['file']['file_name'],
				"penulis" => $_POST['penulis'],
				"tanggal_dibuat" => date('Y-m-d H:i:s'),
				"tanggal_terakhir_dilihat" => date('Y-m-d H:i:s'),
			];

			$this->Berita_M->Create_Berita($data);
			
			$this->session->set_flashdata('Success','Success');
			redirect('Admin/Berita_Admin_C');
			
		} else {
			$this->session->set_flashdata('Failed', $uploads['error']);
            redirect('Admin/Berita_Admin_C');
		}
	}

	public function Read_Berita(){
		$data =  $this->Berita_M->Read_Berita();
		return $data;
	}

	public function Update_Berita(){
		$uploads = $this->Berita_M->do_upload('gambar');
		if($uploads['result'] == 'success') { //jika gambar diedit
			$id = $_POST['id'];
			$data = [
				"judul" => $_POST['judul'],
				"kategori" => $_POST['kategori'],
				"isi" => $_POST['isi'],
				"gambar" => $uploads['file']['file_name'],
				"penulis" => $_POST['penulis'],
			];

			$this->Berita_M->Update_Berita($id, $data);
			
			$this->session->set_flashdata('Success','Success');
			redirect('Admin/Berita_Admin_C');
			
		} else { //jika gambar tidak diedit
			$id = $_POST['id'];
			$data = [
				"judul" => $_POST['judul'],
				"kategori" => $_POST['kategori'],
				"isi" => $_POST['isi'],
				"penulis" => $_POST['penulis'],
			];

			$this->Berita_M->Update_Berita($id, $data);

			$this->session->set_flashdata('Success_Edit','Success');
            redirect('Admin/Berita_Admin_C');
		}
	}

	public function Delete_Berita(){
		$id = $_POST['id'];
		$this->Berita_M->Delete_Berita($id);
		$this->session->set_flashdata('Success_Delete','Success');
		redirect('Admin/Berita_Admin_C');
	}
}
