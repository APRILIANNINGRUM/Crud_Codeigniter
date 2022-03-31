<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class BarangModel extends CI_Model {

//A11.2019.12033 - APRILIANNINGRUM

  // Fungsi untuk menampilkan semua data barang
  public function view(){
    return $this->db->get('barang')->result();
  }
  
  // Fungsi untuk menampilkan data siswa berdasarkan kode barang nya
  public function view_by($kd_brg){
    $this->db->where('kd_brg', $kd_brg);
    return $this->db->get('barang')->row();
  }
  
  // Fungsi untuk validasi form tambah dan ubah
  public function validation($mode){
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
    
    // Tambahkan if apakah $mode save atau update
    // Karena ketika update, kode barang tidak harus divalidasi
    // Jadi kode barang di validasi hanya ketika menambah data barang saja
    if($mode == "save")
      $this->form_validation->set_rules('input_kdbrg', 'Kode_Barang', 'required|numeric|max_length[11]');
    
    $this->form_validation->set_rules('input_nmbrg', 'Nama_Barang', 'required|max_length[50]');
    $this->form_validation->set_rules('input_satuan', 'Satuan', 'required');
    $this->form_validation->set_rules('input_stok', 'Stok', 'required|numeric|max_length[15]');
    
      
    if($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }
  
  // Fungsi untuk melakukan simpan data ke tabel barang
  public function save(){
    $data = array(
      "kd_brg" => $this->input->post('input_kdbrg'),
      "nm_brg" => $this->input->post('input_nmbrg'),
      "satuan" => $this->input->post('input_satuan'),
      "stok" => $this->input->post('input_stok')
    );
    
    $this->db->insert('barang', $data); // Untuk mengeksekusi perintah insert data
  }
  
  // Fungsi untuk melakukan ubah data barang berdasarkan kode barang
  public function edit($kd_brg){
    $data = array(
      "nm_brg" => $this->input->post('input_nmbrg'),
      "satuan" => $this->input->post('input_satuan'),
      "stok" => $this->input->post('input_stok')
    );
    
    $this->db->where('kd_brg', $kd_brg);
    $this->db->update('barang', $data); // Untuk mengeksekusi perintah update data
  }
  
  // Fungsi untuk melakukan menghapus data barang berdasarkan kode barang
  public function delete($kd_brg){
    $this->db->where('kd_brg', $kd_brg);
    $this->db->delete('barang'); // Untuk mengeksekusi perintah delete data
  }
}