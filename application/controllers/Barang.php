<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Barang extends CI_Controller {
  
//A11.2019.12033 - APRILIANNINGRUM

  public function __construct(){
    parent::__construct();
    
    $this->load->model('BarangModel'); // Load BarangModel ke controller ini
  }
  
  public function index(){
    $data['barang'] = $this->BarangModel->view();
    $this->load->view('barang/index', $data);
  }
  
  public function tambah(){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->BarangModel->validation("save")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->BarangModel->save(); // Panggil fungsi save() yang ada di BarangModel.php
        redirect('barang');
      }
    }
    
    $this->load->view('barang/form_tambah');
  }
  
  public function ubah($kd_brg){
    if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
      if($this->BarangModel->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
        $this->BarangModel->edit($kd_brg); // Panggil fungsi edit() yang ada di BarangModel.php
        redirect('barang');
      }
    }
    
    $data['barang'] = $this->BarangModel->view_by($kd_brg);
    $this->load->view('barang/form_ubah', $data);
  }
  
  public function hapus($kd_brg){
    $this->BarangModel->delete($kd_brg); // Panggil fungsi delete() yang ada di BarangModel.php
    redirect('barang');
  }
}