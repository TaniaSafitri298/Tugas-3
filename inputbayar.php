<?php
include("koneksi.php");
//fungsi untuk gabung file
if (isset($_POST['simpan'])){
	$query_tambah_bayar="insert into inputbayar(barang,merek,harga) values
	('".$_POST['barang']."',
	'".$_POST['merek']."',
	'".$_POST['harga']."')";
	$proses_data=mysql_query($query_tambah_bayar);
if($proses_data){
	echo 'Tambah bayar berhasil';
}else{
	echo mysql_error();
}

}
?>


<form method="POST" action=""><!---form untuk kirim data ke DB-->
<table border="1"><!--name harus sama dengan database-->
	<tr>
		<td>Barang</td>
		<td><input name="barang" type="text"></td>
	</tr>
		<td>Merek</td>
		<td><input name="merek" type="text"></td>
	<tr>
		<td>Harga</td>
		<td><input name="harga" type="number"></td>
	</tr>
	<tr>
		<td><input name="simpan" type="submit"></td>
	</tr>
	</table>
	</form>