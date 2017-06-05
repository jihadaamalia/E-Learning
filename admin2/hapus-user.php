<?php

mysql_connect("localhost","root","");
mysql_select_db("elearning");

mysql_query("DELETE from siswa where nis='$_GET[nis]'");
mysql_query("DELETE from u_siswa WHERE nis='$_GET[nis]'");
echo "<script>alert('Data telah dihapus')</script>";
echo "<script>location.href='lihat-user.php';</script>";
?>