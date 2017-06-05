<?php
session_start();
unset($_SESSION['Uname']);
unset($_SESSION['nis']);
$_SESSION['login']=FALSE;
echo("<script>location.href='index.html';</script>");
?>