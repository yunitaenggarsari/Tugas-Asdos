<?php session_start();
include "koneksi.php";
$numoffrow=$_GET['id'];
$query=mysql_query("delete from tab_user where id=".$numoffrow);
echo "<script>
		alert('Selamat anda berhasil delete data');
		window.location.assign('index.php');
	</script>";
?>