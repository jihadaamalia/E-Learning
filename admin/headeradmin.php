<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("elearning");

?>
<html>
<head>
<title> Admin </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<button class="no-accordion"><a href="../admin2/index.php" class="no-accordion" style="font-family: 'Patrick Hand';color: #444;cursor: pointer;width: 100%;border: none;outline: none;font-size:20pt;text-decoration: none; "><center>Dashboard</center></a></button>
<button class="accordion">Siswa</button>
<div class="panel">
<p><a href="../admin2/lihat-user.php" class="panel-accor" style="text-decoration: none; color: #444;  font-family: 'Patrick Hand';font-size: 15pt;"><center>Lihat User</center></a> <br></p>
</div>

<button class="accordion">Profil</button>
<div class="panel">
<p><a href="profileadmin.php" class="panel-accor" style="text-decoration: none; color: #444;  font-family: 'Patrick Hand';font-size: 15pt;"><center>Lihat Profil</center> </a> <br></p>
</div>

<button class="no-accordion"><a href="../logout.php" class="no-accordion" style="font-family: 'Patrick Hand';color: #444;cursor: pointer;width: 100%;border: none;outline: none;font-size:20pt;text-decoration: none; "><center>Logout</a></button>

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
