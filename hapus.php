<?php
include"koneksi.php";


$query = "DELETE FROM pegawai 
							WHERE id_pgw ='$_POST[id]'
								";

mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());

?>

