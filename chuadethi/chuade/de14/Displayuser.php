<!DOCTYPE html>
<html>
<head>
	<title>hien thi user</title>
	<meta charset="utf-8">
</head>
<body>
<?php
	$conn = mysql_connect("localhost","root","");
	if(!$conn){
		die ("Khong ket noi duoc voi database".mysql_error());
	}
	else{
		mysql_select_db("chuadethi",$conn);
		mysql_query("SET NAMES'utf-8'");

		$query = mysql_query("select username,password,email from user");
		echo "<center>thong tin cac sinh vien <br> ******</center>";
		while($row=mysql_fetch_array($query,MYSQL_ASSOC)){
			echo " <center> username: {$row['username']} <br> 
			password: {$row['password']} <br>
			email: {$row['email']} <br> ----------------------------<br> </center>";
		}
	}

	?>
</body>
</html>