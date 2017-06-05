<?php
session_start();
include "koneksi.php";
?>

<html>
<head>
<title> Sign Up </title>
</head>
<body>
<link href="style1.css" type="text/css" rel="stylesheet" >
<div id="wrapper">
<div id="header"><img src="headerbaru.png"  width ="1240" alt="" title=""> </img></div>
<div id="navbar">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Patrick+Hand">
<nav>
	<ul><h1>
		<li><a href="#">HOME</a></li>
		<li><a href="#">MATERI</a>
			<ul>
				 <li><a href="#">Kelas 4</a></li>
       			 <li><a href="#">Kelas 5</a></li>
       			 <li><a href="#">Kelas 6</a></li>
			</ul>
		</li>
		<li><a href="#">SOAL-SOAL</a>
			<ul>
				 <li><a href="#">Kelas 4</a></li>
       			 <li><a href="#">Kelas 5</a></li>
       			 <li><a href="#">Kelas 6</a></li>
			</ul>
		</li>
		<li><a href="index.html">FUN FACTS</a></li>
		<li><a href="index.html">ABOUT US </a></li>
		<li><a href="index.html">PROFILE</a></li>
		<li><a href="#"> SIGN UP </a></li>
		<li><a href="#"> LOG IN </a></li>
		<li><a> </a></li>
		</ul>
</nav>
</div>
<div id="main2"> 
<h3>LENGKAPI FORM REGISTRASIMU!</h3>
<form method = "POST" action="proses_complete_form.php" enctype="multipart/form-data">
<table cellspacing="2px">
<tr>
<?php
$query = ("SELECT max(nis) from siswa");
$temp = mysql_query ($query);
while ($row =mysql_fetch_array($temp)){
	$nis = $row['max(nis)'] + 1;
	$_SESSION['nis'] = $nis;
}
?>
<td><h4>NIS </h4></td>
<td width="5%"> </td>
<td><input style="width: 400px; height: 40px;" class="txt" type="text" name="nis" size="50" maxlength="30" value="<?php echo $nis ?>" readonly></td>
<td rowspan="6" style="float:left; margin-left:60px;"><h4>Pilih foto kamu</h4><input type="file" name="fileToUpload" required></td></tr>
<tr>
<td><h4>Nama Lengkap</h4></td>
<td width="5%"> </td> 
<td><input style="width: 400px; height: 40px;" class="txt" type="text" name="nama" size="40" maxlength="30" placeholder="Nama Kamu" required></td></tr>
<br><br>
<br><br>
<tr>
<td><h4> Tanggal Lahir</h4></td>
<td width="5%"> </td>
<td><input type="date" name="tgl_lahir" min="1990-01-01" max="2010-12-31" required></td> </tr>
<tr>
<td><h4> Jenis Kelamin</h4></td>
<td width="5%"> </td>
<td><input type="radio" name="sex" value="P"checked> Laki-Laki <br>
<input type="radio" name="sex" value="W">Perempuan</td></tr>
<tr>
<td><h4> Alamat Lengkap</h4></td>
<td width="5%"> </td>
<td><input style="width: 400px; height: 80px;" class="txt" type="textarea" name="alamat" size="50" maxlength="30" placeholder="Kamu Tinggal Dimana?" required></td> </tr>
</table>
<br>
<input class="tombol" type="submit" name="Tambah" value="OK">
</form>

<!--<?php 
		//if(isset($_POST['Tambah'])){
//echo("<script>location.href = 'proses_complete_form.php';</script>");}
	?>-->

</div>
</div>
</body>
</html>