<a href="<?php echo site_url('crud/tambah')?>">Tambah</a><br><br>
  <table border="1" cellspacing="0" width="30%" height="20%">
		<tr>
			<th>No</th>
			<th>Nama Buah</th>
			<th>Harga</th>
			<th>Jumlah</th>
			<th>Detail</th>
			<th>Aksi</th>
		</tr>

		<?php
		$no=1;
		foreach ($crud as $lihat) { ?>

		<tr>
			<td> <?php echo $no++ ?></td>
			<td><?php echo $lihat['nama'];?></td>
			<td><?php echo $lihat['harga'];?></td>
			<td><?php echo $lihat['jumlah'];?></td>
      <td>
        <a href=" <?php echo site_url('crud/detail/'.$lihat['id']); ?>">lihat</a>
      </td>
      <td>
        <a href=" <?php echo site_url('crud/update/'.$lihat['id']); ?>">Edit</a> | 
        <a href=" <?php echo site_url('crud/hapus/'.$lihat['id']); ?>">Hapus</a>
      </td>
		</tr>
		<?php } ?>
	</table>
