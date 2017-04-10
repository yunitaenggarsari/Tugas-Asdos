<?php
session_start();
if (isset($_SESSION['username'])) {
	# code...
	include "koneksi.php";
	$query = "SELECT * FROM login";
	$sql = mysql_query($query, $koneksi);
	$jml_baris = mysql_num_rows($sql);
	echo "Selamat datang : ".$_SESSION['username'];
	echo "<br><br>";
	echo "Jumlah data : ".$jml_baris;
	?>
	<br>
	<br/>
	<h1 align="center"> DATA SEKOLAH </h1>
	<br>
	<br/>
	<a href="sd.php"><button> SD </button></a><br>
	<br/>
	<a href="smp.php"><button> SMP </button></a><br>
	<br/>
	<a href="sma.php"><button> SMA </button></a><br>
	<br/>
	<a href="negeri.php"><button> NEGERI </button></a><br>
	<br/>
	<a href="swasta.php"><button> SWASTA </button></a><br>
	<br/>
	<table border=1 cellspacing=0 width="80%">
		<tr>
			<td>id</td>
			<td>Nama_Sekolah</td>
			<td>NPSN</td>
			<td>BP</td>
			<td>Status</td>
			<td>Aksi</td>
		</tr>
		<?php if($jml_baris==0): ?>
		<tr><td colspan=3>Tidak ada Pesan</td></tr>
		<?php else: ?>
		
		<tr>
			<?php while($data = mysql_fetch_object($sql)): ?>
			<td><?php echo $data->id;?></td>
			<td><?php echo $data->Nama_Sekolah;?></td>
			<td><?php echo $data->NPSN;?></td>
			<td><?php echo $data->BP;?></td>
			<td><?php echo $data->Status;?></td>
			<td><a href="update.php?id=<?php echo $data->id;?>">update</a>  <a href="delete.php?id=<?php echo $data->id;?>">delete</a></td>
		</tr>
			<?php endwhile;?>
			<?php endif; ?>
	</table>
	<br>
	<form action="insert.php" method="post">
		Nama_Sekolah : <input type="text" name="Nama_Sekolah" size="40">
		<br>
		<br>
		NPSN : <input type="text"  name="NPSN" size="40">
		<br>
		<br>
		BP : <input type="text"  name="BP" size="40">
		<br>
		<br>
		Status : <input type="text"  name="Status" size="40">
		<br>
		<br>
		<input type="submit" name="tambah" value="Tambahkan ke database">
	</form>
	<a href="logout.php">Logout</a>
	<?php
}else{
	?>Anda TIDAK boleh mengakses halaman ini, <a href="form.php">Login Dulu</a><?php
	?> atau Masuk Sebagai Pengunjung, <a href="pengunjung.php">Lihat DATA</a><?php
}
?>



	
	