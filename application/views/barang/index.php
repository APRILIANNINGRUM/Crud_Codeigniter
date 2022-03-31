<!--A11.2019.12033 - APRILIANNINGRUM-->

<!DOCTYPE html>
<html>
  <head>
    <title>CRUD Codeigniter</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

   <!-- Bootstrap CSS -->
  <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="<?php echo base_url('assets/css/bootstrap-theme.css')?>" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="<?php echo base_url('assets/css/elegant-icons-style.css')?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/css/font-awesome.css')?>" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/style-responsive.css')?>" rel="stylesheet" />
  </head>
  <body>
    <h1>Data Barang</h1>
    <hr>
    <a href='<?php echo base_url("barang/tambah"); ?>'>Tambah Data</a><br><br>
    <table border="1" cellpadding="7">
      <tr>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Satuan</th>
        <th>Stok</th>
        <th colspan="2">Aksi</th>
      </tr>
      <?php
      if( ! empty($barang)){ // Jika data barang tidak sama dengan kosong, artinya jika data barang ada
        foreach($barang as $data){
          echo "<tr>
          <td>".$data->kd_brg."</td>
          <td>".$data->nm_brg."</td>
          <td>".$data->satuan."</td>
		  <td>".$data->stok."</td>   
          <td><a href='".base_url("barang/ubah/".$data->kd_brg)."'>Ubah</a></td>
          <td><a href='".base_url("barang/hapus/".$data->kd_brg)."'>Hapus</a></td>
          </tr>";
        }
      }else{ // Jika data barang kosong
        echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
      }
      ?>
    </table>
  </body>
</html>