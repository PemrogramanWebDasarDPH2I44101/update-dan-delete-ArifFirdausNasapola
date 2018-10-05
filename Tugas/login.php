<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<table align="center">
		<form action="submit.php" method="POST">
		<tr>
			<td colspan="3" align="center"><h1> Form Registrasi </h1></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="number" name="nim"></td>
		</tr>

		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>

		<tr>
			<td>Tanggal Lahir</td>
			<td>:</td>
			<td><input type="date" name="tgl_lahir"></td>
		</tr>

		<tr>
			<td colspan="3" align="center"><input type="submit" name="submit" value="Submit" style="width: 250px"></td>
		</tr>
		</form>
	</table>
</body>
</html>