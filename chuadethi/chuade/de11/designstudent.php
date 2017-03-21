<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Design student</title>
</head>
<body>
	<?php
		if($_SERVER["REQUEST_METHOD"]=="POST"){
			//kết nối
			$conn=mysql_connect("localhost","root","");
			if(!$conn){
				die("Không kết nối được với db".mysql_error());
			}
			else{
				mysql_select_db("chuadethi",$conn);
				mysql_query('SET NAMES"utf-8"');
			}
			//khai báo
			$masinhvien=$_POST['txtmasinhvien'];
			$hoten=$_POST['txthoten'];
			$quequan=$_POST['txtquequan'];
			$gioitinh=$_POST['radio'];
			$insert="insert into sinhvien value('".$masinhvien."','".$hoten."','".$gioitinh."','".$quequan."')";
			//thực hiện
			if(mysql_query($insert,$conn)){
				echo "Bạn thêm thành công";
			}
			else{
				echo "Thất bại";
			}
		}
	?>
	<center>
	<form method="POST" action="">
		<table  border="1" bgcolor="lightblue">
			<tr>  
				<td colspan="2"> <center> <b> DESIGN STUDENT </b></center> </td>
			</tr>
			<tr>
				<td> Mã sinh viên </td>
				<td> <input type="text" name="txtmasinhvien"> </td>
			</tr>
			<tr>
				<td> Họ tên </td>
				<td> <input type="text" name="txthoten"> </td>
			</tr>
			<tr>
				<td> Quê quán </td>
				<td> <input type="text" name="txtquequan"></td>
			</tr>
			<tr>
				
				<td><input type="radio" name="radio" value="Nam"> Nam </td>
				<td><input type="radio" name="radio" value="Nu"> Nữ </td>
			</tr>
			<tr> 
				<td> <input type="submit" name="submitthemmoi" value="Thêm Mới"> </td>
				<td> <input type="reset" name="submitreset" value="Nhập lại"> </td>
			</tr>
		</table>
	</form>
	</center>
</body>
</html>