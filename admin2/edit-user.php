<?php

mysql_connect("localhost","root","");
mysql_select_db("elearning");
$nis=$_GET['nis'];
$query = "SELECT * FROM siswa where nis=$nis";
$result = mysql_query($query);
$col = mysql_fetch_array($result);
?>

<?php

mysql_connect("localhost","root","");
mysql_select_db("elearning");
/*session_start();
if(!isset($_SESSION['username'])){
	header("location:login.php");
}*/
?>

<html>
<head>
<title> ADMIN | Lihat User </title>
<link rel="stylesheet" style="css" href="style.css">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Patrick+Hand">
</head>

<body>
<div id="body">
<!--////////////////////////HEADER/////////////////////////////!-->

<header>
<h1>ADMINISTRATOR</h1>
<!--<p style="text-align:right;"> <?php echo $cadmin['username']?>-->
</style>
</header>

<!--////////////////////////SIDEBAR/////////////////////////////!-->
<div id="sidebar">
<a href="index.php" style="font-family: 'Patrick Hand';color: #444;cursor: pointer;width: 100%;border: none;outline: none;font-size: 15pt;text-decoration: none; padding: 0 0 0 18px;"> <center>Dashboard</center></a><br>
<button class="accordion">Siswa</button>
<div class="panel">
<p><a href="lihat-user.php" style="text-decoration: none; color: #444;  font-family: 'Patrick Hand';font-size: 15pt;"><center>Lihat User</center></a> <br></p>
<p> <a href="#" style="text-decoration: none; color: #444;  font-family: 'Patrick Hand';font-size: 15pt;"><center>Lihat Nilai Siswa</center> </a><br></p>
</div>

<button class="accordion">Profil</button>
<div class="panel">
<p><a href="#" style="text-decoration: none; color: #444;  font-family: 'Patrick Hand';font-size: 15pt;"><center>Lihat Profil</center> </a> <br></p>
<p><a href="#" style="text-decoration: none; color: #444;  font-family: 'Patrick Hand';font-size: 15pt;"><center>Edit Profil</center> </a> <br></p>
</div>

<a href="logout.php" style="font-family: 'Patrick Hand';color: #444;cursor: pointer;width: 100%;border: none;outline: none;font-size:15pt;text-decoration: none; padding: 0 0 0 18px;"><center>Logout</center> </a></button>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
  }
}
</script>
</div>
<!--//////////////////////////////CONTENT/////////////////////////!-->
<div id="wrapper">
<p > <h5> EDIT USER </h5> </p>
<form name="form1" method="POST">
<table>
	<tr>
		<td style="text-decoration: none; color: #444;  font-family: 'Patrick Hand';font-size: 20pt;"> Nama  </td>
		<td><input type="text" style="text-decoration: none; color: #444;  font-family: 'Patrick Hand';font-size: 18pt;" name="nama" value="<?php echo $col['nama'];?>"></td>
	</tr>
	<tr>
		<td style="text-decoration: none; color: #444;  font-family: 'Patrick Hand';font-size: 20pt;"> Tanggal Lahir </td>
		<td><input type="date" name"tgl_lahir" value="<?php echo $col['tgl_lahir'];?>"></td>
	</tr>
	<tr>
		<?php
		$pr=""; 
		$wn="";

		$sex=$col['sex'];
		if ($sex == "P") {
			$pr="checked";
		}
		else {
			$wn="checked";
		}?>
		<td style="text-decoration: none; color: #444;  font-family: 'Patrick Hand';font-size: 20pt;"> Jenis Kelamin </td>
		<td><input type="radio" name="sex" value="P"<?php echo $pr ;?>> Laki-laki<br>
		<input type="radio" name="sex" value="W" <?php echo $wn; ?>> Perempuan </td>
	</tr>
	<tr>
		<td> E-Mail </td>
		<td><input type="email" name="email" value="<?php echo $col['email'];?>"></td>
	</tr>
	<tr>
		<td> Alamat </td>
		<td><input type="text" name="alamat" value="<?php echo $col['alamat'];?>"></td>
	</tr>
</table>
<input value="Simpan" type="submit" name="submit" />
<input type="button" value="Kembali" onclick="self.history.back()">
</form>
<?php 
				if(isset($_POST['submit'])){
					EditEx();
				}
		
				function EditEx()
					{
					$nis = $_GET['nim'];
					$nama=$_POST['nama'];
					$tgl_lahir = $_POST['tgl_lahir'];
					$sex= $_POST['sex'];
					$alamat=$_POST['alamat'];
					$email=$_POST ['email'];
					
					mysql_query("UPDATE data_mhs SET nama = '$nama', tgl_lahir = '$tgl_lahir', sex = '$sex', alamat='$alamat', email = '$email' WHERE nis = '$nis'");
						header("location:lihat-user.php");
					}		
					
					?>	
</div>
</div>
</body>
</html>