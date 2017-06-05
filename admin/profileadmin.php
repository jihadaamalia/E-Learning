<?php
	include('headeradmin.php');
?>
	<div id="main">
		<div class="profile">
		<h5>PROFIL ANDA</h5>
		<?php

		//SEMENTARA
		$_SESSION['no_adm']="1110001";
		$_SESSION['username'] ="demilo";
		?>

		<form method="post">
			<table width="80%">
				<col width="25%">
	  			<col width="40%">
	  			<col width="30%">
				<?php
				$no_adm=$_SESSION['no_adm'];
				$admin=mysql_query("SELECT * FROM admin where no_admin='$no_adm'"); //mengambil data dari tabel admin

				if (!$admin) { //try catch error mysql query
					$message  = 'Invalid query: ' . mysql_error() . "\n";
					$message .= 'Whole query: ' . $admin;
					die($message);}

					while($col=mysql_fetch_array($admin)){
						?> 
						<!--Menampilkan setiap hasil-->
						
						<tr>
							<td class="pro-td">No Admin</td>
							<td class="profile-line"><?php echo $col['no_admin']?></td>
							<td style="font-size: 24pt;color:#30BFC1;font-weight: bold; padding-left:100px;">Foto Anda</td>
						</tr>
						<tr>
							<td class="pro-td">Nama</td>
							<td class="profile-line"><?php echo $col['nama']?></td>
							<td rowspan="4"><div class="polaroid"style="float:left; margin-left:60px;"> <img src="<?php echo $col['gambar']?>" width="170" height="200" ></div></td>
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
							<td class="pro-td" >Email</td>
							<td class="profile-line"><?php echo $col['email']?></td>
						</tr>
					<?php
						}

						$uad=mysql_query("SELECT * FROM u_admin where no_admin='$no_adm'");


						if (!$uad) { //try catch error mysql query
						$message  = 'Invalid query: ' . mysql_error() . "\n";
						$message .= 'Whole query: ' . $uad;
						die($message);}

						while($col=mysql_fetch_array($uad)){
					 ?>
					<tr>
						<td class="pro-td">Username</td>
						<td class="profile-line"><?php echo $col['usernameA']?></td>
					</tr>
					<tr>
						<td class="pro-td">Password</td>
						<td class="profile-line"><?php echo $col['passA']?></td>
					</tr>
					<?php
						}
					?>
				<tr>
					<td colspan="2"><br><input style="float:right;" class="tombol" type="submit"  name="Edit" value="Edit" ></td>
				</tr>
			</table>
		</form>

		<?php 
			if(isset($_POST['Edit'])){
			echo("<script>location.href = 'Editadmin.php';</script>");}
		?>
	</div>
	</div>
</div>
</body>
</html>