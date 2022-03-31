<!--A11.2019.12033 - APRILIANNINGRUM-->

<html>
  <head>
    <title>Form Ubah - CRUD Codeigniter</title>
  </head>
  <body>
    <h1>Form Ubah Data Barang</h1>
    <hr>
    <!-- Menampilkan Error jika validasi tidak valid -->
    <div style="color: red;"><?php echo validation_errors(); ?></div>
    <?php echo form_open("barang/ubah/".$barang->kd_brg); ?>
      <table cellpadding="8">
        <tr>
          <td>Kode Barang</td>
          <td><input type="text" name="input_kdbrg" value="<?php echo set_value('input_kdbrg', $barang->kd_brg); ?>" readonly></td>
        </tr>
        <tr>
          <td>Nama Barang</td>
          <td><input type="text" name="input_nmbrg" value="<?php echo set_value('input_nmbrg', $barang->nm_brg); ?>"></td>
        </tr>
        <tr>
          <td>Satuan</td>
          <td><input type="text" name="input_satuan" value="<?php echo set_value('input_satuan', $barang->satuan); ?>"></td>
        </tr>
        <tr>
          <td>Stok</td>
          <td><input type="text" name="input_stok" value="<?php echo set_value('input_stok', $barang->stok); ?>"></td>
        </tr>
      </table>
        
      <hr>
      <input type="submit" name="submit" value="Ubah">
      <a href="<?php echo base_url(); ?>"><input type="button" value="Batal"></a>
    <?php echo form_close(); ?>
  </body>
</html>