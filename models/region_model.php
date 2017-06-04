<?php

class Region_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

  function tambah_category($data){
    $this->db->insert('reg_category');
  }

  function tampilkan_category(){
    return $this->db->get('reg_category')->result();
  }

  function update_category($id,$data){
    $this->db->where('id',$id);
    $this->db->update('reg_category', $data);
  }

  function hapus_category($id){
    $this->db->where('id',$id);
    $this->db->delete('reg_category');
  }

}
