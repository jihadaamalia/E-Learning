<html>
<head>
    <title> log in </title>
	<!--WEB RESPONSIF-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style2.css">
    </head>
<body>
    <div class="a9"> <center>E - Learning Science
<p class="got"> Silahkan masukkan username dan passwordmu <p>
<!--MENAMPILKAN FORM LOGIN--> 
<form action="#" method="POST">
  <label class="formlog" for="fname">Username</label>
  <input type="text" id="iduser" name="Username">
  <label  class="formlog" id="idpass" for="lname">Password</label>
  <input type="password"  name="Password"><br>

    <b><input type="submit" class="button" value="Login as Admin" onClick="Login(this.value)" name="asAdm"></b>
    <b><input type="submit" class="button" value="Login as Siswa " onClick="Login(this.value)" name="asSwa"></b>
</form>

<script type="text/javascript">
    function LoginA(teksnya)
    {
      var dtuser = document.getElementById("iduser").value;
      var dtpassword = document.getElementById("idpass").value;
      try
      {
        xmlHttp = new XMLHttpRequest();
        xmlHttp.onreadystatechange = function(){
          if(xmlHttp.readyState == 4 && xmlHttp.status == 200)
          {
            document.getElementById(teksnya).innerHTML = xmlHttp.responseText;
          }
        }
        xmlHttp.open("GET", "user.php?user=" + dtuser + "&password=" + dtpassword, true);
        xmlHttp.send();

      }
      catch(e)
      {
        try
        {
          xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
        }
        catch (e)
        {
          xmlHttp = new ActiveXObject("microsoft.XMLHTTP");
        }
      }
      return xmlHttp;
    }
  </script>

<?php
	 //memulai session
	//membuat koneksi ke db
	session_start();
	mysql_connect("localhost","root","");
	mysql_select_db("elearning");
	

	//cuma bisa di link kl button ssiswa yang diklik
	if(isset($_POST['asSwa'])){
		$query=mysql_query("SELECT * FROM u_siswa WHERE usernameS = '".$_POST['Username']."' AND passS = '".$_POST['Password']."'");
		$row = mysql_fetch_array($query);
		
		if(!empty($row['usernameS']) AND !empty($row['passS'])) //apabila baris ditemukan
		{	
			$_SESSION['login'] = TRUE;
			$_SESSION['uname']=$_POST['Username'];
			swa();
		}
		else
		{
			$message = "Username atau password salah ".$_POST['Username'];
			echo "<script type='text/javascript'>alert('$message');</script>";
		}

	} elseif(isset($_POST['asAdm'])){ //button admin di klik
		$query=mysql_query("SELECT * FROM u_admin WHERE usernameA= '".$_POST['Username']."' AND passA = '".$_POST['Password']."'");
		$row = mysql_fetch_array($query);
		if(!empty($row['usernameA']) AND !empty($row['passA']))
		{
			adm();
		}
		else
		{
			$message = "Username atau password salah ".$_POST['Username'];
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	}

	function swa()
	{
		//membuat session
		
		$query1=mysql_query("SELECT nis FROM u_siswa where usernameS='".$_SESSION['uname']."'");
		$row1 = mysql_fetch_array($query1);
		$_SESSION['nis']=$row1['nis'];
		if (!$row1) { //try catch error mysql query
						$message  = 'Invalid query: ' . mysql_error() . "\n";
						$message .= 'Whole query: ' . $row1;
						die($message);}
		echo("<script>location.href='materi/kelas4.php';</script>");
	}
	
//fungsi admin
	function adm()
	{
		$_SESSION['login'] = TRUE;
		$_SESSION['uname'] = $_POST['Username'];
		
		echo("<script>location.href='admin2/index.php';</script>");
	}
	?>
	
</div>
        
        <div class="footlog">
        <center> <table>
          <tr>  
        <td> <img class="fL1" src="img/fuu4.jpg" ></td>
        <td> <img class="fL1" src="img/fuu4.jpg" ></td>
            </tr> </table></div></center>
</div>
		
</body>
</html>

