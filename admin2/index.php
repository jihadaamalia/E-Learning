<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("elearning");

?>
<html>
<head>
<title> Admin </title>
<link rel="stylesheet" type="text/css" href="style.css"/>
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
<nav class="cd-side-nav">
<button class="no-accordion"><a href="index.php" class="no-accordion"><center>Dashboard</center></a></button>
<button class="accordion">Siswa</button>
<div class="panel">
<p><a href="lihat-user.php" class="panel-accor"><center>Lihat User</center></a> <br></p>
</div>

<button class="accordion">Profil</button>
<div class="panel" >
<p><a href="../admin/profileadmin.php" class="panel-accor"><center>Lihat Profil</center> </a> <br></p>
</div>

<button class="no-accordion"><a href="../logout.php" class="no-accordion"><center>Logout</a></button>

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
</nav>
</div>

<!--//////////////////////////////CONTENT/////////////////////////!-->
<div id="wrapper">
<p > <h5> DASHBOARD </h5>
<h2> Selamat datang,  <?php echo $_SESSION['uname']?></h2></p>
<table>
<tr>
<td><p style="color: #444;  font-family: 'Patrick Hand';font-size: 1.5em; float:left; margin-left: 30%;"> Jumlah Admin </p></td>
<td> <p style="color: #444;  font-family: 'Patrick Hand';font-size: 1.5em; float:left; margin-left:30%"> Jumlah User </p></td>
</tr>
<tr>
<?php 
$query1 = mysql_query("SELECT * from u_admin");
$query2 = mysql_query("SELECT * from u_siswa");

$num_rows1 = mysql_num_rows($query1);
$num_rows2 = mysql_num_rows($query2);
?>
<td><img src="../image/adminn.png" style="margin-left:20%"><h1 style="margin-left:40%"> <?php echo $num_rows1; ?></td>
<td><img src="../image/kidss.png" style="margin-left:20%"><h1  style="margin-left:40%"> <?php echo $num_rows2; ?> </td>
</tr>
</table>