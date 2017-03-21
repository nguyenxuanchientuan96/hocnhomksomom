<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>UPDATE</title>
	
</head>
<body>
<?php
	$conn=mysql_connect("localhost","root","");
	if(!$conn){
		die("không kết nối đc với db".mysql_error());
	}
	else{
		mysql_select_db("chuadethi",$conn);
		mysql_query('SET NAMES"utf-8"');
	}
	
	


?>
	<form method="post" action="">
		<table>
			<tr>
				<td> Trang update </td>
			</tr>
			<tr>
				<td> Họ tên </td>
				<td>  </td>
			</tr>
		</table>
	</form>

</body>
</html>