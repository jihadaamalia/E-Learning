<?php 
mysql_connect("localhost","root","");
mysql_select_db("elearning");

session_start(); 

$no_adm=$_SESSION['no_adm'];
$nama=$_POST['nama'];
$ttl=$_POST['ttl'];
$jk=$_POST['jk'];
$alamat=$_POST['alamat'];
$username=$_SESSION['username'];
$password=$_POST['pass'];
$email=$_POST['email'];
$target_dir = "../image/gambaradm/";
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
    $edit = mysql_query("UPDATE admin SET nama='$nama', tgl_lahir='$ttl', sex='$jk', alamat='$alamat',email='$email'  WHERE no_admin = '$no_adm'");
    $edit2 = mysql_query("UPDATE u_admin SET usernameS='$username', passS='$password'WHERE no_admin = '$no_adm'");
    $target_file="image/picupload.png";
	echo("<script>location.href='profileadmin.php';</script>");
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $edit = mysql_query("UPDATE admin SET nama='$nama', tgl_lahir='$ttl', sex='$jk', alamat='$alamat',email='$email', gambar='$target_file' WHERE no_admin = '$no_adm'");
        $edit2 = mysql_query("UPDATE u_admin SET usernameS='$username', passS='$password'WHERE no_admin = '$no_adm'");
		echo("<script>location.href='profileadmin.php';</script>");
        
}
}

				
?>