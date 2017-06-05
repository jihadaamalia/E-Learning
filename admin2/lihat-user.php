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
<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
<script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 }
 </script>
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
<div class="panel">
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
</div>


<!--//////////////////////////////CONTENT/////////////////////////!-->
<div id="wrapper">
<br>
<br>
<table class="tablesorter" cellspacing="0" width="95%">
<thead>
<tr>
<th> NIS </th>
<th> Username </th>
<th> Nama </th>
<th> Email </th>
<th> Foto </th>
<th> Aksi </th>
</tr>
</thead>
<tbody> 

<?php 
$data = mysql_query("SELECT * FROM siswa join u_siswa on siswa.nis=u_siswa.nis ");
while($col=mysql_fetch_array($data)){
?>

<tr>
<td><?php echo $col['nis']?> </td>
<td><?php echo $col['usernameS']?></td>
<td><?php echo $col['nama']?></td>
<td><?php echo $col['email']?></td>
<td><?php echo $col['gambarS']?></td>
<td><input type="image" src="image/icn_edit.png" onclick="window.location='edit-user.php?nis=<?php echo $col['nis'];?>'" title="Edit"><input type="image" src="image/icn_trash.png" onclick="window.location='hapus-user.php?nis=<?php echo $col['nis'];?>'" title="Delete"></td>
<?php
} 
?>

</tr>
</tbody>
</table>
</div>
</div>
</body>
</html>