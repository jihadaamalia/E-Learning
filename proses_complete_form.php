<?php

if(isset($_POST['Tambah'])){
mysql_connect("localhost","root","");
mysql_select_db("elearning");
session_start();

$nis = $_SESSION ['nis'];
$nama = $_POST['nama'];
$tlahir = $_POST ['tgl_lahir'];
$sex = $_POST ['sex'];
$alamat = $_POST ['alamat'];

$email=$_SESSION['email'];
$username=$_SESSION['usernameS'];
$pass=$_SESSION['passS'];
$gambarS = "image/gambar/";
$target_file = $gambarS . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
if($check !== false) {
	$uploadOk = 1;
} else {
	$uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
	$daftar1 = mysql_query("INSERT INTO u_siswa (usernameS,passS,nis) VALUES ('$username','$pass','$nis')");
	$daftar2 = mysql_query("INSERT INTO siswa (nis, nama, tgl_lahir, sex, alamat,email) VALUES ('$nis', '$nama', '$tlahir' , '$sex', '$alamat','$email')");
	}
// if everything is ok, try to upload file
else {
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		 $target_file = $gambarS . basename($_FILES["fileToUpload"]["name"]);
		$daftar1 = mysql_query("INSERT INTO u_siswa (usernameS,passS,nis) VALUES ('$username','$pass','$nis')");
		$daftar2 = mysql_query("INSERT INTO siswa (nis, nama, tgl_lahir, sex, alamat,gambarS,email) VALUES ('$nis', '$nama', '$tlahir' , '$sex', '$alamat','$target_file','$email')");
		
		echo '<script language="javascript">alert"Data Tersimpan!");</script>';
		echo("<script>location.href='siswa/profilesiswa.php';</script>");
}

if (empty($nama)){
	echo"<script>alert('Nama belum diisi')";
	echo"<meta http-equiv='refresh' content='1' url=complete_form.php'>";
}
	if (empty($tlahir)){
		echo"<script>alert('Tanggal lahir belum diisi')";
		echo"<meta http-equiv='refresh' content='1' url=complete_form.php'>";
	}
		if (empty($sex)){
			echo"<script>alert('Jenis Kelamin belum diisi')";
			echo"<meta http-equiv='refresh' content='1' url=complete_form.php'>";
		}
			if (empty($alamat)){
				echo"<script>alert('Alamat belum diisi')";
				echo"<meta http-equiv='refresh' content='1' url=complete_form.php'>";
			}
		}
	} ?>