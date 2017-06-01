<?php

class Place_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

  function tambah_place($data){
    $this->db->insert('place');
  }

  function tampilkan_place(){
    return $this->db->get('reg_place')->result();
  }

  function update_place($id_place,$data){
    $this->db->where('id_place',$id_place);
    $this->db->update('place', $data);
  }

  function hapus_place($id_place){
    $this->db->where('id_place',$id_place);
    $this->db->delete('place');
  }


  function tambah_post($data){
    $this->db->insert('posts',$data);
  }

  function tampilkan_post(){
    return $this->db->get('posts')->result();
  }

  function update_post($id_post,$data){
    $this->db->where('id_post',$id_post);
    $this->db->update('posts',$data);

  }

  function hapus_post($id_post){
    $this->db->where('id_post', $id_post);
    $this->db->delete('posts');
  }

}