<?php 
mysql_connect("localhost","root","");
mysql_select_db("elearning");

session_start(); 

$nis=$_SESSION['nis'];
$nama=$_POST['nama'];
$ttl=$_POST['ttl'];
$jk=$_POST['jk'];
$alamat=$_POST['alamat'];
$username=$_SESSION['username'];
$password=$_POST['pass'];
$email=$_POST['email'];			
$target_dir = "../image/gambar/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
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
    $edit = mysql_query("UPDATE siswa SET nama='$nama', tgl_lahir='$ttl', sex='$jk', alamat='$alamat',email='$email'  WHERE nis = '$nis'");
    $edit2 = mysql_query("UPDATE u_siswa SET usernameS='$username', passS='$password'WHERE nis = '$nis'");
    $target_file="image/picupload.png";
	echo("<script>location.href='profilesiswa.php';</script>");
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $edit = mysql_query("UPDATE siswa SET nama='$nama', tgl_lahir='$ttl', sex='$jk', alamat='$alamat', gambarS='$target_file',email='$email' WHERE nis = '$nis'");
        $edit2 = mysql_query("UPDATE u_siswa SET usernameS='$username', passS='$password'WHERE nis = '$nis'");
		echo("<script>location.href='profilesiswa.php';</script>");
        
}
}

				
?>