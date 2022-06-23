<?php
include"koneksi.php";

$id = $_POST['id_pgw'];
$nama = $_POST['nama'];
$nip = $_POST['nip'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
		if ($nama == '') {
			$data['error']['edit_nama'] = 'Nama  harap diisi';
		}
		if ($nip == '') {
			$data['error']['edit_nip'] = 'NIP HARUS DISI';
		}
		if ($jenis_kelamin == '') {
			$data['error']['edit_jenis_kelamin'] = 'Pilih Jenis Kelamin';
		}
		if ($alamat == '') {
			$data['error']['edit_alamat'] = 'Alamat harap diisi';
		}

		if (empty($data['error'])) {
			$query = "UPDATE pegawai SET
											nama = '$nama',
											nip = '$nip',
											jenis_kelamin = '$jenis_kelamin',
											alamat = '$alamat'
											WHERE id_pgw = '$id'
											";

			mysqli_query($koneksi, $query)
			or die ("Gagal Perintah SQL".mysql_error());
			$data['hasil'] = 'sukses';
		} else {
			$data['hasil'] = 'gagal';
		}
		echo json_encode($data);

?>

