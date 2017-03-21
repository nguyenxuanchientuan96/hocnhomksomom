<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>DESIGN NHAN VIEN</title>
</head>
<body>
<center>
	<?php
		if ($_SERVER["REQUEST_METHOD"]=="POST"){
		$conn=mysql_connect("localhost","root","");
		if(!$conn){
			die("Bạn không kết nối được với db".mysql_error());
		}
		else{
			mysql_select_db("chuadethi",$conn);
			mysql_query('SET NAMES "utf-8"');
		}

		$manhanvien=$_POST['txtmanhanvien'];
		$hoten=$_POST['txthoten'];
		$gioitinh=$_POST['gioitinh'];
		$quequan=$_POST['txtquequan'];
		$nam=$_POST['txtnam'];
		$insert="insert into nhanvien values('".$manhanvien."','".$hoten."','".$gioitinh."','".$quequan."','".$nam."')";
		if(mysql_query($insert,$conn)){
			echo "Bạn thêm thành công";
		}
		else{
			echo "Thất bại";
		}

	}
	?>

	<form method="POST" action="">
		<table border="1" bgcolor="lightblue">
			<tr>
				<td colspan="2"> NHẬP THÔNG TIN NHÂN VIÊN </td>
			</tr>
			<tr>
				<td> Mã nhân viên </td>
				<td> <input type="text" name="txtmanhanvien">
			</tr>
			<tr>
				<td> HỌ tên </td>
				<td><input type="text" name="txthoten"></td>
			</tr>
			<tr>
				<td>Giới tính</td>
				<td>
					<input type="radio" name="gioitinh" value="Nam"> Nam
					<input type="radio" name="gioitinh" value="Nu"> Nữ
				</td>
			</tr>
			<tr>
				<td> Quê Quán </td>
				<td><input type="text" name="txtquequan"></td>
			</tr>
			<tr>
				<td>Năm Tuyển Dụng</td>
				<td><input type="text" name="txtnam"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Thêm Mới">
				<input type="reset" name="submit" value="Nhập lại"></td>
			</tr>
		</table>
	</form>
</center>
</body>
</html>