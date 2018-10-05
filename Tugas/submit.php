<?php 
require_once("db.php");
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$tgl_lahir = $_POST['tgl_lahir'];
$sql = "INSERT INTO siswa(nim, nama, tgl_lahir)
		VALUES ('$nim', '$nama', '$tgl_lahir')";
if (mysqli_query($conn, $sql)) {
	echo "<center> New record created successfully </center>";
}else{
	echo "Error: ". $sql . "<br>" . mysqli_error($conn);
}		
mysqli_close($conn);
echo"<br>";
echo "<center> Silahkan klik <a href='tampilan.php'>link ini</a> untuk selanjutnya </center>";
?>