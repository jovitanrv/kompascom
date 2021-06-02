<?php

class M_akun extends CI_model
{
    // public function searchByEmail($email){ //bisa jadi function isExist
    //     $this->db->select('*');
    //     $this->db->from('akun');
    //     $this->db->where('email',$email);

    //     $query = $this->db->get();

    //     return $query->row_array();
    // }

    public function register($data){

        $this->db->insert('akun',$data);
    }

    public function update_prof($data){
        $this->db->where('email',$data['email']);
        $this->db->set('nama',$data['name']);
        $this->db->update('akun');
    }

    public function update_pass($data){
        $this->db->where('email',$data['email']);
        $this->db->set('password',$data['pass']);
        $this->db->update('akun');
    }

    public function login($email){
       return $this->db->get_where('akun',['email'=>$email])->row_array();
    } 



	
}
