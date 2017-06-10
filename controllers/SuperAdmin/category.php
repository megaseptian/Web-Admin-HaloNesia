<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class category extends CI_Controller {
	public function index()
	{
		$cek = $this->session->userdata('type');
		if($cek == 'Super Admin'){
  		$this->load->view('header');
  		$this->load->view('category_view');
  		$this->load->view('footer');
		}
		else{
			header("location: ".base_url().'login');
		}
	}

  public function insert(){
		$this->load->model(array('category_model'));
    $data = array(
			'id' => $this->input->post('id'),
			'category_name' => $this->input->post('category_name'),
			'category_description' => $this->input->post('category_description'),
		);
      $this->category_model->tambah_category($data);
	}

  public function update(){
		$this->load->model(array('category_model'));
    $id = $this->input->post('id');
    $data = array(
			'category_name' => $this->input->post('category_name'),
			'category_description' => $this->input->post('category_description'),
		);
    $this->category_model->update_category($id, $data);
	}

  public function delete($id){
		$this->load->model(array('category_model'));
    $this->category_model->hapus_category($id);
	}

  function json() {
    		$this->load->model(array('category_model'));
        header('Content-Type: application/json');
        echo $this->category_model->json();
    }

}
