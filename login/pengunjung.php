<!DOCTYPE html>
<html>
<head>
	<title>Form Login Admin</title>
</head>
<body>
	<form action="option.php" method="post">
	<br>
	<br/>
	<h2> DATA USER </h2>
		<br>
		<br/>
		<td>Nama Depan*</td>
				<td><input type="text" name="3"></td>
		</tr>
		<tr>
		<br>
		<br/>
		<td>Nama Belakang</td>
				<td><input type="text" name="4"></td>
		</tr>
		<tr>
		<br>
		<br/>
		<td>Jenis Kelamin*</td>
				<td>
					<input type="radio" name="5" value="Male">Male
					<input type="radio" name="5" value="Female">Female
					<input type="radio" name="5" value="Other">Other
				</td>
		</tr>
		<tr>
		<br>
		<br/>
		<td>Regional</td>
				<td>
					<select name="6">
						<option value="Jawa Tengah">Jawa Tengah</option>
						<option value="Jawa Timur">Jawa Timur</option>
						<option value="Jawa Barat">Jawa Barat</option>
						<option value="Yogyakarta">Yogyakarta</option>
						<option value="Jakarta">Jakarta</option>
					</select>
				</td>
		</tr>
		<tr>
		<br>
		<br/>
		<td>Email*</td>
				<td><input type="text" name="7"></td>
		</tr>
		<tr>
		<br>
		<br/>
		<td>
			Tanda(*) harus di isi
			</td>
		</tr>
		<tr>
		<br>
		<br/>
		<input type="submit" name="login" value="Login">
	</form>
</body>
</html>