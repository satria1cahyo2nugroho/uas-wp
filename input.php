<?php

include"koneksi.php";

$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$nip = $_POST['nip'];

if ($nama == '') {
    $data['error']['nama'] = 'Nama tidak boleh kosong';
}
if ($nip == '') {
    $data['error']['nip'] = 'NIP Tidak Boleh Kosong';
}
if ($jenis_kelamin == '') {
    $data['error']['jenis_kelamin'] = 'Piih Jenis Kelammin';
}
if ($alamat == '') {
    $data['error']['alamat'] = 'Alamat tidak boleh kosong';
}

if (empty($data['error'])) {
    
		$query = "insert INTO pegawai SET
										nama = '$nama',
										nip = '$nip',
										jenis_kelamin = '$jenis_kelamin',
										alamat = '$alamat'
										";

		mysqli_query($koneksi, $query)
		or die ("Gagal Perintah SQL".mysql_error());
		
    $data['hasil'] = 'sukses';
    
} else {
    
    $data['hasil'] = 'gagal';
}

echo json_encode($data);

?>

