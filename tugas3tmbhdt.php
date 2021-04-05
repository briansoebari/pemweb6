<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Isi Data Baru</h1>
<!-- Make pegawai form -->
<form method="POST" action="#">
	<table width="400" cellpadding="2" cellspacing="2">
		<tr>
			<td width="130">NIK</td>
			<td><input type="text" name="nik" required></td>
		</tr>
		<tr>
			<td width="130">Nama</td>
			<td><input type="text" name="nama" required></td>
		</tr>
		<tr>
			<td width="130">Alamat</td>
			<td><input type="text" name="alamat" required></td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="tmblSimpan" value="simpan">
				<input type="reset" name="tmblReset" value="reset">
			</td>
		</tr>
	</table>
</form>
<!-- When click batal button move to tugas3smpnhps.php -->
<form action="tugas3smpnhps.php">
    <input type="submit" value="Batal" />
</form>
</body>
</html>
<?php
// Declaration servername, username, password, and database
$servername="localhost";
$username="root";
$password="";
$dbname="kelurahan";

// Create Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check Connection
if(!$conn){
	die("Connection failed: ". mysqli_connect_error());
}

// If clicl tmblSimpan 
if(isset($_POST['tmblSimpan'])){

	// Create record
	$sql= "INSERT INTO pegawai(NIK, Nama, Alamat, IdJabatan) VALUES ('$_POST[nik]', '$_POST[nama]', '$_POST[alamat]', '1')";
	if(mysqli_query($conn, $sql)){
		echo "New record created succesfully";
		// Move to tugas3smpnhps.php
		echo "<meta HTTP-EQUIV='REFRESH' content='1; url=tugas3smpnhps.php'>";
	} else{
		echo "Error: ". $sql ."<br>". mysqli_error($conn);
	}
	// Close Connection
	mysqli_close($conn);	
}

?>