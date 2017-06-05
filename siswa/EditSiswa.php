<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<title> Edit Data </title>
</head>

<?php
	include('headeronly.php');
?>

	<div id="main-full">
		<h3>EDIT DATA</h3>
		<div id="profil">
		<form method="post" class="edit-prof" action="EditSiswaProses.php" enctype="multipart/form-data">
		<table width="90%" style="float:left; ">
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
						<td><input type="text" name="nis" size="20" maxlength="30" value="<?php echo $col['nis']?>" disabled ></td>
						<td style="font-size: 24pt;color:#30BFC1;font-weight: bold; padding-left:110px;">Foto Kamu</td>
					</tr>
					<tr>
						<td class="pro-td">Nama</td>
						<td><input class="edit-prof" type="text" name="nama" size="20" maxlength="30" value="<?php echo $col['nama']?>"></td>
						<td rowspan="6"><div class="polaroid"style="float:left; margin-left:60px;"><img src="<?php echo $col['gambarS']?>" width="200" height="300" style="float:left;"><input type="file" name="fileToUpload" id="file" size="20" value="<?php echo $col['gambarS']?>" width="200" height="300" ></div></td>
					</tr>	
					<tr>
						<td class="pro-td">Tanggal Lahir</td>
						<td><input type="date" name="ttl" size="20" maxlength="30" value="<?php echo $col['tgl_lahir']?>"></td>
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

					$usis=mysql_query("SELECT * FROM u_siswa where nis='$nis'");


					if (!$usis) { //try catch error mysql query
					$message  = 'Invalid query: ' . mysql_error() . "\n";
					$message .= 'Whole query: ' . $usis;
					die($message);}

					while($col=mysql_fetch_array($usis)){
				 ?>
				<tr>
					<td class="pro-td">Username</td>
					<td><input type="text" name="username" size="20" maxlength="30" value="<?php echo $col['usernameS']?>" disabled></td>
				</tr>
				<tr>
					<td class="pro-td">Password</td>
					<td><input type="password" name="pass" size="20" maxlength="30" value="<?php echo $col['passS']?>"></td>
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
		echo("<script>location.href = 'EditSiswaProses.php';</script>");}
	?>
	</div>
</div>
</body>
</html>