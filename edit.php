
<?php
	
	include"koneksi.php";
	$no = 1;
	$data = mysqli_query ($koneksi, " select 
											id_pgw,
											nip,
											nama,
											jenis_kelamin,
											alamat
									  from 
									  pegawai 
									  where id_pgw = $_POST[id]");
	$row = mysqli_fetch_array ($data);
	
?>
<form role="form" id="form-edit" method="post" action="update.php">
	<div class="form-group">
		<label>Nama</label>
		<input type="hidden" name="id_pgw" value="<?php echo $row['id_pgw'] ; ?>">
		<input class="form-control" name="nama" value="<?php echo $row['nama'] ; ?>">
		<p style="color:red" id="error_edit_nama"></p>
	</div>
	<div class="form-group">
	<label>NIP</label>
	<input class="form-control" name="nip"  value="<?php echo $row['nip'] ; ?>">
	<p style="color:red" id="error_edit_nip"></p>
</div>
	<div class="form-group">
		<label>Jenis Kelamin</label>
		<div class="radio">
			<label>
				<input type="radio" name="jenis_kelamin" value="Laki-laki"  <?php if($row['jenis_kelamin']=='Laki-laki'){ ; ?> checked <?php } ?>>Laki-laki
			</label>
		</div>
		<div class="radio">
			<label>
				<input type="radio" name="jenis_kelamin" value="Perempuan"  <?php if($row['jenis_kelamin']=='Perempuan'){ ; ?> checked <?php } ?>>Perempuan
			</label>
		</div>
	</div>
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<textarea name="alamat" class="form-control" rows="3"><?php echo $row['alamat'] ; ?></textarea>
		<p style="color:red" id="error_edit_alamat"></p>
	</div>
	
</form>