<?php
include "koneksi.php";

if(isset($_POST['Tambah'])){
session_start();
$_SESSION['email'] = $_POST['email'];
$_SESSION['usernameS'] = $_POST['usernameS'];
$_SESSION['passS'] = $_POST['passS'];

if (empty($_SESSION['email'])){
echo "<script>alert('Email belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=signup.php'>";
}
elseif(empty($_SESSION['usernameS'])){
echo "<script>alert('Username belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=signup.php'>";
}
elseif (empty($_SESSION['passS'])){
echo "<script>alert('Password belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=signup.php'>";
}
elseif (!empty($_SESSION['email']) && !empty($_SESSION['usernameS']) && !empty($_SESSION['passS'])) {
header("location:complete_form.php");
}
}



?>