<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>DELETE</title>
	
</head>
<body>
	<?php
	if ($_SERVER["REQUEST_METHOD"]=="POST") {

		$conn=mysql_connect("localhost","root","");
		if(!$conn){
			die("không kết nối đc với db".mysql_error());
		}
		else{
			mysql_select_db("chuadethi",$conn);
			mysql_query('SET NAMES"utf-8"');
		}
		$mact=$_POST['txtmacauthu'];
		

		$sql="DELETE from cauthu1 where mact='".$mact."'";
		if (mysql_query($sql,$conn)) {
			echo "Thành công";
		}
		else{
			die("Thất baị".mysql_error());
		}
		
	}

	?>
	<form method="post" action="">
		<table>
			
			<tr>
				<td> Trang DELETE </td>
			</tr>
			<tr>
				<td>Mã cầu thủ</td>
				<td><input type="text" name="txtmacauthu"></td>
			</tr>
			
			<tr>
				<td> <input type="submit" name="submitdelete" value="Delete"> </td>
			</tr>
		</table>
	</form>

</body>
</html>