<?php session_start();
include "koneksi.php";
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$usia=$_POST['usia'];
$query=mysql_query("insert into tab_user(nama,alamat,usia) values('$nama','$alamat','$usia')");
echo "<script>
		alert('Selamat anda berhasil menambahkan data');
		window.location.assign('index.php');
	</script>";
?>