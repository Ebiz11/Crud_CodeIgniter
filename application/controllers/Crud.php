<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('Crud_model');
    $this->load->helper('url');
  }
	public function index()
	{
    $data['crud'] = $this->Crud_model->tampil_data();
		$this->load->view('crud_view/index', $data);
	}

  public function hapus($id){
    $this->Crud_model->delete($id);
    redirect('crud');
  }

  public function detail($id){
    $data['judul'] = "Detail Buah";
    $data['detail'] = $this->Crud_model->details($id);
    $this->load->view('crud_view/detail', $data);
  }

  public function tambah(){
    $this->load->helper('form');

    $this->load->library('form_validation');

		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('harga', 'harga', 'required');
		$this->form_validation->set_rules('jumlah', 'jumlah', 'required');

		if($this->form_validation->run() === FALSE){
    $this->load->view('crud_view/tambah');
  }else{
    $this->Crud_model->tambah();
    redirect('crud');
  }
  }

  public function update($id){

    $this->load->helper('form');
    $this->load->library('form_validation');

    if (isset($_POST['submit'])) {

    		$this->form_validation->set_rules('nama', 'nama', 'required');
    		$this->form_validation->set_rules('harga', 'harga', 'required');
    		$this->form_validation->set_rules('jumlah', 'jumlah', 'required');

    		if($this->form_validation->run() === FALSE){
        $this->load->view('crud_view/edit');
      }else{
        $this->Crud_model->update($id);
        redirect('crud');
      }
    }else{
      $data['judul'] = "Edit Buah";
      $data['edit'] = $this->Crud_model->details($id);
      $this->load->view('crud_view/edit', $data);
    }
  }
}
