<!--A11.2019.12033 - APRILIANNINGRUM-->

<html>
  <head>
    <title>Form Tambah - CRUD Codeigniter</title>
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
    <h1>Form Tambah Data Barang</h1>
    <hr>
    <!-- Menampilkan Error jika validasi tidak valid -->
    <div style="color: red;"><?php echo validation_errors(); ?></div>
    <?php echo form_open("barang/tambah"); ?>
      <table cellpadding="8">
        <tr>
          <td>Kode Barang</td>
          <td><input type="text" name="input_kdbrg" value="<?php echo set_value('input_kdbrg'); ?>"></td>
        </tr>
        <tr>
          <td>Nama Barang</td> 
          <td><input type="text" name="input_nmbrg" value="<?php echo set_value('input_nmbrg'); ?>"></td>
        </tr>
		<tr>
          <td>Satuan</td> 
          <td><input type="text" name="input_satuan" value="<?php echo set_value('input_satuan'); ?>"></td>
        </tr>
        <tr>
          <tr>
          <td>Stok</td> 
          <td><input type="text" name="input_stok" value="<?php echo set_value('input_stok'); ?>"></td>
        </tr>
        
		
		
      </table>
        
      <hr>
      <input type="submit" name="submit" value="Simpan">
	  <input type="submit" name="submit" value="tampil">
      <a href="<?php echo base_url(); ?>"><input type="button" value="Batal"></a>
    <?php echo form_close(); ?>
  </body>
</html>