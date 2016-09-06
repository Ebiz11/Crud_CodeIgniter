<?php

/**
 *
 */
class Crud_model extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }

  public function tampil_data(){
    $query = $this->db->get('buah');
    return $query->result_array();
  }

  public function delete($id){
    $this->db->where('id', $id);
    $this->db->delete('buah');
  }

  public function details($id){
    $query = $this->db->get_where('buah', ['id'=>$id]);
    return $query->row_array();
  }

  public function tambah(){
    $data = [
      'nama' => $this->input->post('nama'),
      'harga' => $this->input->post('harga'),
      'jumlah' => $this->input->post('jumlah')
    ];

    $this->db->insert('buah', $data);
  }

  public function update($id){
    $data = [
      'nama' => $this->input->post('nama'),
      'harga' => $this->input->post('harga'),
      'jumlah' => $this->input->post('jumlah')
    ];

    $this->db->where('id', $id);
    $this->db->update('buah', $data);
  }


}
