<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_M extends CI_Model {

    public function do_upload($file_name) {
        $config['upload_path']      = './uploads/';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']         = 4096;
        $config['max_width']        = 1920;
        $config['max_height']       = 1080;

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload($file_name)) { //jika gagal
            $data = [
                'result' => 'failed',
                'file' => '',
                'error' => $this->upload->display_errors()
            ];
            return $data;
        } else { //jika berhasil
            $data = [
                'result' => 'success',
                'file' => $this->upload->data(),
                'error' => ''
            ];
            return $data;
        }
    }

    public function Create_Berita($data) {
        $this->db->insert('berita', $data);
    }

    public function Read_Berita() {
        //mengambil data berita
        $this->db->select('*');
        $this->db->from('berita');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function Update_Berita($id, $data) {
		$this->db->where('id', $id);
		$this->db->update('berita', $data);
	    return;
    }

    public function Delete_Berita($id) {
        $this->db->delete('berita', array('id' => $id));
	    return;
    }

    public function Get_Berita_Populer() {
        //mengambil data berita
        $this->db->select('judul, dibaca');
        $this->db->from('berita');
        $this->db->order_by('dibaca','desc');
        $this->db->limit(10);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function Get_Berita_Terkini() {
        //mengambil data berita
        $this->db->select('judul, kategori, gambar, tanggal_dibuat');
        $this->db->from('berita');
        $this->db->order_by('tanggal_dibuat','desc');
        $this->db->limit(5);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function Get_Berita_Sorotan() {
        //mengambil data berita
        $this->db->select('judul, kategori, gambar');
        $this->db->from('berita');
        $this->db->order_by('sorotan','desc');
        $this->db->limit(3);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function Get_Berita_Headline() {
        //mengambil data berita
        $this->db->select('judul, gambar, headline, tanggal_dibuat');
        $this->db->from('berita');
        $this->db->order_by('headline','desc');
        $this->db->limit(4);
        $query = $this->db->get();
        return $query->result_array();
    }
}
