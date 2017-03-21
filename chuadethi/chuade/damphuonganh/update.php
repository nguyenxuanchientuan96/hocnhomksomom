<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>UPDATE</title>
	
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
	$hoten=$_POST['txthoten'];
	$quequan=$_POST['txtquequan'];
	$namsinh=$_POST['txtnamsinh'];

	$sql="UPDATE cauthu1 set mact='".$mact."',hoten='".$hoten."',quequan='".$quequan."',namsinh='".$namsinh."' where mact='".$mact."' ";
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
				<td> Trang update </td>
			</tr>
			<tr>
				<td>Mã cầu thủ</td>
				<td><input type="text" name="txtmacauthu"></td>
			</tr>
			<tr>
				<td> Họ tên </td>
				<td> <input type="text" name="txthoten"> </td>
			</tr>
			<tr>
				<td> Quê quán </td>
				<td><input type="text" name="txtquequan"></td>
			</tr>
			<tr>
				<td> Năm sinh </td>
				<td><input type="tex" name="txtnamsinh"></td>
			</tr>
			<tr>
				<td> <input type="submit" name="submitupdate" value="Update"> </td>
			</tr>
		</table>
	</form>

</body>
</html>