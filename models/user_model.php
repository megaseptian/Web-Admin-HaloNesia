<?php

class User_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

  function buat_akun($data){
    
        $this->db->insert('users',$data);

  }

  function cek_akun($user_email,$user_password)
  {
    $this->db->select('*');
    $this->db->from('users');
    $this->db->where('user_email',$user_email);
    $this->db->where('user_password',$user_password);
    
    return $this->db->get()->row();
  }

  function update_akun($id_user,$data){
    $this->db->where('id_user',$id_user);
    $this->db->update('users',$data);
  }

  function delete_akun($id_user){
    $this->db->where('id_user',$id_user);
    $this->db->delete('users');
  }

  function tambah_review($data){
    $this->db->insert('reviews',$data);
  }

  function update_review($id_review,$data){
    $this->db->where('id_review',$id_review);
    $this->db->update('reviews',$data);
  }

  function delete_review($id_review){
    $ths->db->where('id_review',$id_review);
    $this->db->delete('reviews');
  }


}