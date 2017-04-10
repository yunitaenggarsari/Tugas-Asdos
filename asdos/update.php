<?php session_start();
include "koneksi.php";
$numoffrow=$_GET['id'];
$query = "SELECT * FROM tab_user WHERE Id =".$numoffrow; //get the data that will be updated
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);
?>
<form action="updatedata.php" method="post">
		Id : <input type="text" name="id" value="<?php echo $data['id'];?>">
		<br>
		<br>
		Nama : <input type="text" name="nama" size="40">
		<br>
		<br>
		Alamat : <input type="text"  name="alamat" size="40">
		<br>
		<br>
		Usia : <input type="text"  name="usia" size="2">
		<br>
		<br>
		<input type="submit" name="update" value="Ubah Data">
</form>