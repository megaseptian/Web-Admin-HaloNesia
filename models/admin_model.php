<?php

class Admin_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function buat_akun($data){
		
        $this->db->insert('admin',$data);

	}

	function cek_akun($admin_login,$admin_password)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('admin_login',$admin_login);
		$this->db->where('admin_password',$admin_password);
		
		return $this->db->get()->row();
	}

   	function tampilkan_admin(){
   		$this->db->select('*');
   		$this->db->from('admin');
   		$this->db->where('id_role !=', '1');

   		return $this->db->get()->result();
   }


   function hapus_admin($id_admin){
   		$this->db->where('id_admin',$id_admin);
   		$this->db->delete('admin');
   }

   function update_admin($id_admin,$data){
   		$this->db->where('id_admin',$id_admin);
   		$this->db->update('admin',$data)
   }


}