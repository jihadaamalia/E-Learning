<?php 
session_start();
?>
<!--menjalankan fungsi tab-->

<html >
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title> Pembahasan </title>
	<script type="text/javascript" src="../js/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="../js/jquery-ui-1.7.custom.min.js"></script>
    <script type="text/javascript">
	<!--menjalankan fungsi tab dengan js-->
		$(function() {

			var $tabs = $('#tabs').tabs();
	
			$(".ui-tabs-panel").each(function(i){
	
			  var totalSize = $(".ui-tabs-panel").size() - 1;
	
			  if (i != totalSize) {
			      next = i + 2;
		   		  $(this).append("<a href='#' class='next-tab mover' rel='" + next + "'><h6 class='no-pad'>Next Page &#187;</h6></a>");
			  }
	  
			  if (i != 0) {
			      prev = i;
		   		  $(this).append("<a href='#' class='prev-tab mover' rel='" + prev + "'><h6 class='no-pad'>&#171; Prev Page</h6></a>");
			  }
   		
			});
	
			$('.next-tab, .prev-tab').click(function() { 
		           $tabs.tabs('select', $(this).attr("rel"));
		           return false;
		       });
		});
    </script>

</head>
<body>
	<link href="style.css" type="text/css" rel="stylesheet" >
		<div id="wrapper">
	<div id="header">
	<!--menampilkan header-->
		<img src="img/headerbaru.png"  width ="1240" alt="" title=""> </img>
	</div>
	<!--menampilkan navigasi-->
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
			</li> <!--fungsi session apabila login false-->
			<li><a href="#" <?php if($_SESSION['login'] == FALSE ){echo 'style="display:none;"'; } ?>>SOAL-SOAL</a>
				<ul>
					 <li><a href="../soal/kelas-4.php">Kelas 4</a></li>
	       			 <li><a href="../soal/kelas-5.php">Kelas 5</a></li>
	       			 <li><a href="../soal/kelas-6.php">Kelas 6</a></li>
				</ul>
			</li>
			<li><a href="../funfact/foodfact.php">FUN FACTS</a></li>
			<li><a href="../siswa/profilesiswa.php">PROFILE</a></li>
			<li><a href="../logiin.php" <?php if($_SESSION['login'] == TRUE ){echo 'style="display:none;"'; } ?>> SIGN UP </a></li>
			<li><a href="#" <?php if($_SESSION['login'] == TRUE ){echo 'style="display:none;"'; } ?>> LOG IN </a></li>
			<li><a href="../logout.php" <?php if($_SESSION['login'] == FALSE ){echo 'style="display:none;"'; } ?>> LOG OUT </a></li>
			<li><a> </a></li>
			</ul>
	</nav>
	</div>
	<div id="sidebar">
	<!--menajalnkan fungsi accordian-->
		<button class="accordion">Kelas 4</button>
		<div class="panel">
		<p><a href="kelas4.php" class="panel-accor"><center>Bentuk Benda</center></a> <br></p>
		</div>

		<button class="accordion">Kelas 5</button>
		<div class="panel">
		<p><a href="kelas5.php" class="panel-accor"><center>Pencernaan</center> </a> <br>
		</div>

		<button class="accordion">Kelas 6</button>
		<div class="panel">
		<p><a href="kelas6.php" class="panel-accor"><center>Ekosistem</center> </a> <br></p>
		</div>
		

		<script>
		//untuk js pada accordion
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
