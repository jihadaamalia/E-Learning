
<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("elearning");

//$_SESSION['login']=TRUE;
?>
<html>
<body>
	<link href="../style3.css" type="text/css" rel="stylesheet" >
	<div id="wrapper">
	<div id="header">
		<img src="../headerbaru.png"  width ="1240" alt="" title=""> </img>
	</div>
	<div id="navbar">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Patrick+Hand">
	<nav>
		<ul><h1>
			<li><a href="../index.html">HOME</a></li>
			<li><a href="../materi/kelas4.php">MATERI</a>
				<ul>
					 <li><a href="../materi/kelas4.php">Kelas 4</a></li>
	       			 <li><a href="../materi/kelas5.php">Kelas 5</a></li>
	       			 <li><a href="../materi/kelas6.php">Kelas 6</a></li>
				</ul>
			</li>
			<li><a href="#" <?php if($_SESSION['login'] == FALSE ){echo 'style="display:none;"'; } ?>>SOAL-SOAL</a>
				<ul>
					 <li><a href="../soal/kelas-4.php">Kelas 4</a></li>
	       			 <li><a href="../soal/kelas-5.php">Kelas 5</a></li>
	       			 <li><a href="../soal/kelas-6.php">Kelas 6</a></li>
				</ul>
			</li>
			<li><a href="../funfact/foodfact.php">FUN FACTS</a></li>
			<li><a href="../siswa/profilesiswa.php">PROFILE</a></li>
			<li><a href="../signup.php" <?php if($_SESSION['login'] == TRUE ){echo 'style="display:none;"'; } ?>> SIGN UP </a></li>
			<li><a href="../logiin.php" <?php if($_SESSION['login'] == TRUE ){echo 'style="display:none;"'; } ?>> LOG IN </a></li>
			<li><a href="../logout.php" <?php if($_SESSION['login'] == FALSE ){echo 'style="display:none;"'; } ?>> LOG OUT </a></li>
			<li><a> </a></li>
			</ul>
	</nav>
	</div>