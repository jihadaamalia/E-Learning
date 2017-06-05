<?php include "koneksi.php";
?>

<html>
<head>
<title> Sign Up </title>
<link href="style1.css" type="text/css" rel="stylesheet" >
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Patrick+Hand">
</head>
<body>
<center>
<header>
<h5> YUK DAFTAR! </h5>
<form method = "POST" action="proses_signup.php">
<table cellspacing="2px">
<tr> 
<input style="width: 400px; height: 50px;" class="txt" type="text" name="usernameS" size="50" maxlength="30" placeholder="Username Kamu"></tr>
<br><br>
<tr>
<input style="width: 400px; height: 50px;" class="txt" type="email" name="email" size="50" maxlength="30" placeholder="Email Kamu"> </tr>
<br><br>
<tr>
<input style="width: 400px; height: 50px;" class="txt" type="password" name="passS" size="50" maxlength="30" placeholder="Password"> </tr>
</table>
<br>
<input class="tombol" type="submit" name="Tambah" value="Buat Akun">

<div class="bg"></div>
</header>
</form>
</center>
</body>
