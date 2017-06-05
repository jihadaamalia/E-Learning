<?php
	include('headeradmin.php');
?>
	<div id="main">
		<h5>EDIT DATA</h5>
		<div id="profil">

		<form method="post" class="edit-prof" action="EditAdminProses.php" enctype="multipart/form-data">
		
		<table width="90%" style="float:left; ">
			<col width="25%">
  			<col width="50%">
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
						<td class="pro-td">No admin</td>
						<td><input type="text" name="no_adm" size="20" maxlength="30" value="<?php echo $col['no_admin']?>" disabled ></td>
						<td style="font-size: 24pt;color:#30BFC1;font-weight: bold; padding-left:110px;">Foto Anda</td>
					</tr>
					<tr>
						<td class="pro-td">Nama</td>
						<td class="pro-td"><input class="edit-prof" type="text" name="nama" size="20" maxlength="30" value="<?php echo $col['nama']?>"></td>
						<td rowspan="3"><div class="polaroid"style="float:left; margin-left:60px;"><img src="<?php echo $col['gambar']?>" width="170" height="200" style="float:left;"><input type="file" name="fileToUpload" id="file" size="20" value="<?php echo $col['gambar']?>"></div></td>
					</tr>	
					<tr>
						<td class="pro-td">Tanggal Lahir</td>
						<td class="pro-td"><input type="date" name="ttl" size="20" maxlength="30" value="<?php echo $col['tgl_lahir']?>"></td>
					</tr>
					<tr>
						<td class="pro-td">Jenis Kelamin</td>
						<td><input type="radio" name="jk" <?php if (isset($col['sex']) && $col['sex']=="W") echo "checked";?> value="W">Perempuan
							<input type="radio" name="jk" <?php if (isset($col['sex']) && $col['sex']=="P") echo "checked";?> value="P">Laki-laki
						</td>
					</tr>
					<tr>
						<td class="pro-td">Alamat</td>
						<td><input type="text" name="alamat" size="20" maxlength="30" value="<?php echo $col['alamat']?>"></td>
					</tr>
					<tr>
						<td class="pro-td">Email</td>
						<td><input type="text" name="email" size="20" maxlength="30" value="<?php echo $col['email']?>"></td>
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
					<td><input type="text" name="username" size="20" maxlength="30" value="<?php echo $col['usernameA']?>" disabled></td>
				</tr>
				<tr>
					<td class="pro-td">Password</td>
					<td><input type="password" name="pass" size="20" maxlength="30" value="<?php echo $col['passA']?>"></td>
				</tr>
				<?php
					}
				?>
			<tr>
				<td></td>
				<td style="float:right;"><input type="submit" class="tombol" name="Submit" value="Submit" ></td>
			</tr>
		</table>
	</form>

	<?php 
		if(isset($_POST['Submit'])){
		echo("<script>location.href = 'EditAdminProses.php';</script>");}
	?>
	</div>
</div>