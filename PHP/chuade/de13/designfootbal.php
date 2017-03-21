<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title> DESIGN FOOTBALL</title>
</head>
<body>
	<?php
		if($_SERVER["REQUEST_METHOD"]=="POST"){
		$conn=mysql_connect("localhost","root","");
		if(!$conn){
			die("không kết nối được với db".mysql_error());
		}
		else{
			mysql_select_db("chuadethi",$conn);
			mysql_query('SET NAMES"utf-8"');
		}

		$macauthu=$_POST['txtmacauthu'];
		$hoten=$_POST['txthoten'];
		$namsinh=$_POST['namsinh'];
		$quequan=$_POST['quequan'];
		$sodienthoai=$_POST['txtsodienthoai'];
		$insert="insert into cauthu values('".$macauthu."','".$hoten."','".$namsinh."','".$quequan."','".$sodienthoai."')";
		if(mysql_query($insert,$conn)){
			echo '<script type="text/javascript"> alert("Bạn thêm thành công"); </script>';
		}
		else{
			echo '<script type="text/javascript"> alert("Thất Bại"); </script>';
		}


}

	?>



	<center>
	<form method="POST" action="">
		<table border="1" bgcolor="lightblue"> 
			<tr>
				<td colspan="4"> <center> <b> NHẬP THÔNG TIN CẦU THỦ </b> </center> </td>
			</tr>
			<tr>
				<td> MÃ cầu thủ </td>
				<td colspan="3"> <input type="text" name="txtmacauthu"/> </td>
			</tr>
			<tr>
				<td> Họ tên  </td>
				<td colspan="3"> <input type="text" name="txthoten"/> </td>
			</tr>
			<tr>
				<td> Năm sinh </td>
				<td> 
					<select name="namsinh"> 
						<option value="1990"> 1990 </option>
						<option value="1991"> 1991 </option>
						<option value="1992"> 1992 </option>
						<option value="1993"> 1993 </option>
						<option value="1994"> 1994 </option>
					</select>
				</td>
				<td> Quê quán </td>
				<td>
					<select name="quequan">
						<option value="Nam Dinh"> Nam Định</option>
						<option value="Ha Noi"> Hà Nội</option>
						<option value="Thai Binh">Thái Bình</option>
						<option value="Ha Nam"> Hà Nam</option>
						<option value="Thanh Hoa"> Thanh Hóa</option>
					</select>
				</td>
			</tr>
			<tr>
				<td> Số điện thoại </td>
				<td colspan="3"> <input type="text" name="txtsodienthoai"/> </td>
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