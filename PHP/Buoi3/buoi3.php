<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Buổi 3</title>
	
</head>
<body>
	<?php
		//kết nối với mysql trên máy
		$conn=mysql_connect("localhost","root","");
		if (!$conn){ 
			die("không kết nối được với database".mysql_error());
		}
		else{//ngược lại
			mysql_select_db("testphp",$conn); 
			mysql_query("SET NAMES'utf-8'"); 
			}
	?>
	<?php
		
		$macauthu=$_POST['txtmacauthu'];
		$hoten=$_POST['txthoten'];
		$namsinh=$_POST['namsinh'];
		$quequan=$_POST['quequan'];
		$sodienthoai=$_POST['txtsodienthoai'];
		$insert="insert into cauthu1 values('".$macauthu."','".$hoten."','".$namsinh."','".$quequan."', '".$sodienthoai."')";
	?>

	
	<center>
		<form action="" method="post">
			<table border="1" bgcolor="pink">
				<tr>
					<td colspan="4" align="center"> <b> NHẬP THÔNG TIN CẦU THỦ </b> </td>
				</tr>
				<tr>
					<td> Mã cầu thủ </td>
					<td colspan="3"> <input type="text" name="txtmacauthu" placeholder="Mời bạn nhập mã cầu thủ" size="90"></td>
				</tr>
				<tr>
					<td> Họ tên </td>
					<td colspan="3"> <input type="text" name="txthoten" placeholder="Mời bạn nhập tên" size="90"></td>
				</tr>
				<tr>
					<td> Năm sinh </td>
					<td>
						<select name="namsinh">
							<option value="1990">1990</option>
							<option value="1992">1992</option>
							<option value="1994">1994</option>
							<option value="1996">1996</option>
							<option value="1998">1998</option>
						</select>
					</td>
					<td> Quê quán </td>
					<td> 
						<select name="quequan">
							<option value="Ha Noi"> Ha Noi </option>
							<option value="Ha Nam"> Ha Nam </option>
							<option value="Bac Ninh"> Bac Ninh </option>
							<option value="Thanh Hoa"> Thanh Hoa </option>
							<option value="Nam Dinh"> Nam Dinh </option>

						</select>
					</td>
				</tr>
				<tr>
					<td> Số điện thoại </td>
					<td colspan="3"> <input type="text" name="txtsodienthoai" placeholder="mời bạn nhập số điện thoại" size="90"></td>
				</tr>
				<tr>
					<td></td>
					<td> <input type="submit" name="submitthemmoi" value="Thêm mới"></td>
					<td> <input type="submit" name="submitnhaplai" value="Nhập lại"></td>
				</tr>
				<tr>
					<?php
						while ( $macauthu==null) {
					echo " ";
					}

						if (mysql_query($insert,$conn)){ 
								echo '<script type="text/javascript">
											alert("Chúc mừng bạn đã thêm thành công!!!");
								    	</script>'; 
							}
							else{
								echo '<script type="text/javascript">alert(" bạn chưa thêm thành công");</script>'.mysql_error();}

					?>
				</tr>

			</table>
		</form>
	</center>
	
</body>
</html>