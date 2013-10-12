<!DOCTYPE html>
<html>
<head>
<title>Tugas Praktikum</title>
<!-- tag style digunakan untuk mempercantik tampilan halaman -->
<style>
body{
	background-color: #FFDAB9;
}
.content{
	background-color: #BC8F8F;
	margin: 200px auto;
	padding: 5px 20px 40px 20px;
	width: 550px;
	border: solid 3px #4B0082;
}
.min_content{
	margin: 0px auto;
	width: 250px;
}
.content h1{
	color: #4B0082;
}
.content label{
	display:block;
}
.content input{
	display:block;
	margin: 5px 0 0 0;
	padding: 5px;
}
</style>
</head>
<body>

<?php
if(isset($_POST['user'])&&isset($_POST['pass'])){
	if($_POST['user']=='aha'&& $_POST['pass']=='hah'){
		echo "Selamat Datang ". $_POST['user'];
	}else {
		echo "<script>
		alert('Username Masih Kosong');
		</script>";
	}
}
?>

<form name="login" action="<?php $_SERVER['PHP_SELF'];?>" method="post" onSubmit="return validateForm()">
<div class="content">
<div class="min_content">
<h1>Login</h1>
</div>
<hr color="#4B0082" />
<div class="min_content">
<label>Username</label>
<input type="text" name="user" id="user" autofocus />
<label>Password</label>
<input type="password" name="pass" />
<input type="submit" value="Login" />
</div>
</div>
</form>

<script>
function validateForm(){
var x=document.forms["login"]["user"].value;
if (x==null || x==""){
	alert("Username Masih Kosong");
	document.getElementById("user").focus();
	return false;
}
var y=document.forms["login"]["hah"].value;
if (y==null || y==""){
	alert("Password Masih Kosong");
	document.getElementById("hah").focus();
	return false;
}
var alphaExp = /^[a-zA-Z]+$/;
if(x.match(alphaExp)){
	if(y.match(alphaExp)){
		return true;
	}else{
		alert("Password yang diisikan Harus Huruf");
		document.getElementById("user").focus();
		return false;
	}
	}else{
		alert("Username yang diisikan Harus Huruf");
		document.getElementById("user").focus();
		return false;
	}
}
</script>
</body>
</html>