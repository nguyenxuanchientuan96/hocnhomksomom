<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> DESIGN MOBILE </title>
</head>
<body>
	<?php
		if($_SERVER["REQUEST_METHOD"]=="POST"){
		$conn=mysql_connect("localhost","root","");
		if (!$conn) {
			die("Kết nối với db thất bại".mysql_error());
		}
		else{
			mysql_select_db("chuadethi",$conn);
			mysql_query('SET NAMES"utf-8"');
		}
		$madt=$_POST['txtmadienthoai'];
		$tendt=$_POST['txttendienthoai'];
		$hangdt=$_POST['txthangdienthoai'];
		$gia=$_POST['txtgia'];
		$insert="insert into dienthoai values('".$madt."','".$tendt."','".$hangdt."','".$gia."')";
		if (mysql_query($insert,$conn)) {
			echo "Bạn thêm thành công";
		}
		else{
			die("Thất bại".mysql_error());
		}

	}
	?>
	<center>
	<form method="POST" action="">
		<table border="1" bgcolor="lightblue">
			<tr>
				<td colspan="2"> NHẬP THÔNG TIN ĐIỆN THOẠI </td>
			</tr>
			<tr>
				<td> MÃ điện thoại </td>
				<td> <input type="text" name="txtmadienthoai"/> </td>
			</tr>
			<tr>
				<td> Tên điện thoại </td>
				<td> <input type="text" name="txttendienthoai"/> </td>
			</tr>
			<tr>
				<td>  Hãng điện thoại </td>
				<td> <input type="text" name="txthangdienthoai"/> </td> 
			</tr>
			<tr>
				<td> Giá </td>
				<td> <input type="text" name="txtgia"/> </td>

			</tr>
			<tr>
				<td><input type="submit" name="submitthemmoi" value="Thêm Mới"></td>
				<td> <input type="reset" name="submitreset" value="Nhập lại"> </td>
			</tr>
		</table>
	</form>
	</center>
</body>
</html>