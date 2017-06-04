<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class region extends CI_Controller {
	public function index()
	{
		$cek = $this->session->userdata('type');
		if($cek == 'Super Admin'){
  		$this->load->view('header');
  		$this->load->view('region_view');
  		$this->load->view('footer');
		}
		else{
			header("location: ".base_url().'login');
		}
	}

  public function insert(){
		$this->load->model(array('region_model'));
    $data = array(
      'id' => $this->input->post('id'),
      'region_name' => $this->input->post('region_name'),
      'region_description' => $this->input->post('region_description'),
      'latitude' => $this->input->post('latitude'),
      'longitude' => $this->input->post('longitude'),
    );
      $this->region_model->tambah_region($data);
	}

  public function update(){
		$this->load->model(array('region_model'));
    $id = $this->input->post('id');
    $data = array(
      'region_name' => $this->input->post('region_name'),
      'region_description' => $this->input->post('region_description'),
      'latitude' => $this->input->post('latitude'),
      'longitude' => $this->input->post('longitude'),
    );
      $this->region_model->update_region($id,$data);
	}

  public function delete($id){
		$this->load->model(array('region_model'));
    $this->region_model->hapus_region($id);
	}

  function json() {
    		$this->load->model(array('region_model'));
        header('Content-Type: application/json');
        echo $this->region_model->json();
    }
}
