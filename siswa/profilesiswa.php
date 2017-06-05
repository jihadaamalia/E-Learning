<!DOCTYPE html>
<html lang="en">
<html>
<head>

	<title> Profile </title>
	<meta charset="utf-8" />
	<!-- import plugin script -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
	<style type="text/css">
	
	.container {
	width: 50%;
	margin: 20px auto;
	}

	.p {
	text-align: center;
	font-size: 14px;
	padding-top: 140px;
	}
	
	</style>

</head>

<?php
	include('headeronly.php');
?>
	<div id="main-full">
		<div class="profile">
		<h3>PROFIL KAMU</h3>
		<form method="post">
			<table width="90%">
				<col width="25%">
	  			<col width="50%">
	  			<col width="30%">
				<?php
				$nis=$_SESSION['nis'];
				$siswa=mysql_query("SELECT * FROM siswa where nis='$nis'"); //mengambil data dari tabel siswa

				if (!$siswa) { //try catch error mysql query
					$message  = 'Invalid query: ' . mysql_error() . "\n";
					$message .= 'Whole query: ' . $siswa;
					die($message);}

					while($col=mysql_fetch_array($siswa)){
						?> 
						<!--Menampilkan setiap hasil-->
						
						<tr>
							<td class="pro-td">NIS</td>
							<td class="profile-line"><?php echo $col['nis']?></td>
							<td style="font-size: 24pt;color:#30BFC1;font-weight: bold; padding-left:110px;">Foto Kamu</td>
						</tr>
						<tr>
							<td class="pro-td">Nama</td>
							<td class="profile-line"><?php echo $col['nama']?></td>
							<td rowspan="4"><div class="polaroid"style="float:left; margin-left:60px;"> <img src="<?php echo $col['gambarS']?>" width="200" height="300" ></div></td>
						</tr>	
						<tr>
							<td class="pro-td">Tanggal Lahir</td>
							<td class="profile-line"><?php echo $col['tgl_lahir']?></td>
						</tr>
						<tr>
							<td class="pro-td">Jenis Kelamin</td>
							<td class="profile-line"><?php if ($col['sex']=="P") {echo "Laki-laki";} else {echo "Perempuan";}?></td>
						</tr>
						<tr>
							<td class="pro-td">Alamat</td>
							<td class="profile-line"><?php echo $col['alamat'] ?></td>
						</tr>
						<tr>
							<td class="pro-td">Email</td>
							<td class="profile-line"><?php echo $col['email']?></td>
						</tr>
					<?php
						}

						$usis=mysql_query("SELECT * FROM u_siswa where nis='$nis'");


						if (!$usis) { //try catch error mysql query
						$message  = 'Invalid query: ' . mysql_error() . "\n";
						$message .= 'Whole query: ' . $usis;
						die($message);}

						while($col=mysql_fetch_array($usis)){
					 ?>
					<tr>
						<td class="pro-td">Username</td>
						<td class="profile-line"><?php echo $col['usernameS']?></td>
					</tr>
					<tr>
						<td class="pro-td">Password</td>
						<td class="profile-line"><?php echo $col['passS']?></td>
					</tr>
					<?php
						}
					?>
				<tr>
					<td colspan="2"><br><input style="float:right;" type="submit" class="tombol" name="Edit" value="Edit" ></td>
				</tr>
			</table>
		</form>

		<?php 
			if(isset($_POST['Edit'])){
			echo("<script>location.href = 'EditSiswa.php';</script>");}
		?>
	
		<h3 style="white-space: pre-line;">HASIL LATIHAN KAMU</h3>
		<div><canvas id="canvas" style="width:600; height:400;"></canvas></div>
		
		</div> 
		<?php
		$user=$_SESSION['uname'];
		$jmlnilai="";
		$nilai=mysql_query("SELECT * FROM nilai where usernameS='$user'");
		while($col=mysql_fetch_array($nilai)){
			$temp =  $col['nilai'].", ";
			$jmlnilai = $jmlnilai.$temp;
		}
		
		$tes = mysql_query("SELECT COUNT(nilai) AS 'jmltes' FROM nilai where usernameS='$user'"); 
		$col=mysql_fetch_assoc($tes);
		$jmltes=$col['jmltes'];
		$label="";

		for ($i=1;$i<=$jmltes;$i++)
		{
			if ($i==$jmltes)
			{
				$data =" 'Lat $i'";
				$label = $label.$data; 
			}
			else {
				$data =" 'Lat $i',";
				$label = $label.$data; 
			}
		}

		?>

        <script>
            // line chart data
 			
			var lineChartData = {
			    labels: [<?php echo $label ?>],
			    datasets: [{
			    	label : "Hasil Latihan Kamu",
			        fillColor: "rgba(220,220,220,0)",
			        strokeColor: "rgba(220,180,0,1)",
			        pointColor: "rgba(220,180,0,1)",
			        pointBorderColor: "rgba(75,192,192,1)",
			        data: [<?php echo $jmlnilai ?>],
			        xAxisID : " Jumlah Latihan ",
			        yAxisID : " Nilai " 
			    }]

			}

			Chart.defaults.global.animationSteps = 50;
			Chart.defaults.global.tooltipYPadding = 16;
			Chart.defaults.global.tooltipCornerRadius = 0;
			Chart.defaults.global.tooltipTitleFontStyle = "normal";
			Chart.defaults.global.tooltipFillColor = "rgba(0,160,0,0.8)";
			Chart.defaults.global.animationEasing = "easeOutBounce";
			Chart.defaults.global.responsive = true;
			Chart.defaults.global.scaleLineColor = "grey";
			Chart.defaults.global.scaleFontSize = 16;


			var ctx = document.getElementById("canvas").getContext("2d");
			var LineChartDemo = new Chart(ctx).Line(lineChartData, {
			    pointDotRadius: 10,
			    bezierCurve: true,
			    scaleShowVerticalLines: true,
			    scaleGridLineColor: "grey"
			});
		</script>
	</div>
	</div>
</body>
</html>