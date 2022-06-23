	<table class="table table-bordered">
		<tr>
			<th>
				No 
			</th>
			<th>
				NIP		 
			</th>
			<th>
				Nama 
			</th>
			<th>
				Jenis Kelamin
			</th>
			<th>
				Alamat
			</th>
			<th>
				Opsi
			</th>
		</tr>
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
												  order by id_pgw DESC");
				while ($row = mysqli_fetch_array ($data))
				{
			?>
		<tr>
			<td>
				<?php echo $no++; ?>
			</td>
			<td>
				<?php echo $row['nip']; ?>
			</td>
			<td>
				<?php echo $row['nama']; ?>
			</td>
			<td>
				<?php echo $row['jenis_kelamin']; ?>
			</td>
			<td>
				<?php echo $row['alamat']; ?>
			</td>
			<td>
				<a href="#" id="edit" data-id="<?php echo $row['id_pgw']; ?>">Edit</a> |
				<a href="#" id="hapus" data-id="<?php echo $row['id_pgw']; ?>">Hapus</a> 
			</td>
		</tr>
		<?php
			}
		?>
	</table>