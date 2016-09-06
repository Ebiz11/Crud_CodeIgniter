
<?php echo validation_errors(); ?><br>
<?php echo form_open('crud/update/'.$edit['id']); ?>

<label for="title">Nama</label><br>
<input type="text" name="nama" value="<?php echo $edit['nama']; ?>" required="">
<br><br>

<label for="title">Harga</label><br>
<input type="text" name="harga" value="<?php echo $edit['harga']; ?>" required="">
<br><br>

<label for="title">Jumlah</label><br>
<input type="text" name="jumlah" value="<?php echo $edit['jumlah']; ?>" required="">

<input type="submit" name="submit" value="Simpan">

<?php echo form_close(); ?>
