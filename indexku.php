









<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>MASUK LOGIN</title>
	<link rel="stylesheet" type="text/css" href="">
	
</head>
<body>
	 <style>
              
              html{
                  background:url(prog1.JPG) no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;

                }
           </style>
	
	<center><h2><font color="white">SILAHKAN LOGIN TERLEBIH DAHULU</font></h2></center>	
	<br/>
	<div class="login">
	<br/>
	<form action="proses_login.php" method="post" onSubmit="return validasi()">
		<div align="center" class="tengah"><p align="center"><font face="verdana"></p></div>
		<style>
.tengah{
position: absolute;margin-top: -120px;margin-left: -200px;left: 50%;top: 50%;width: 420px;height: 240px;background-color: purple;
}
</style>
</head><body><div align="center" class="tengah"><p align="center"><font face="verdana" size="4" color="black"></font>
<form method="post" action="proses_login.php" name="postform"><font face="verdana" size="2" color="white"></br>Username</br><input type="text" name="username"/></br>Password</br><input type="password" name="password" id="password" /></br></br>

<input type="submit" name="Login" value="Login" a href="pilihan_menu.html"></a></br>
<br/>
<a href="hlm_utama.html"><font color="white">Kembali</font></a></form>
	<center>
		<table>
            </div>
			<div>
         
		</form>
	
<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;	
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
</script>


</body>
</html>