
<?php echo validation_errors(); ?><br>
<?php echo form_open('crud/tambah'); ?>

<label for="title">Nama</label><br>
<input type="text" name="nama" >
<br><br>

<label for="title">Harga</label><br>
<input type="text" name="harga" >
<br><br>

<label for="title">Jumlah</label><br>
<input type="text" name="jumlah" >

<input type="submit" name="submit" value="Simpan">

<?php echo form_close(); ?>
