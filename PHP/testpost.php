<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Bài 2 </title>
</head>
<body>
	<form action="formbai2.php" method="post">
		<tr> 
			<td> Thu thập thông tin người dùng </td>
		</tr>
		<br>
		<tr>
			<td> Tên người dùng </td>
			<td>  <input type="text" name="txtnguoidung" value=""> </td>
		</tr>
		<br>
		<tr>
			<td> Mật khẩu </td>
			<td> <input type="password" name="txtpassword" value=""> </td>
		</tr>
		<br>
		<tr>
			<td> Giới tính </td>
			<td> <input type="radio" name="radio" value="Nam"> Nam </td>
			<td> <input type="radio" name="radio" value="Nu"> Nu </td>
			<td> <input type="radio" name="radio" value="KXD"> Không xác định </td>
		</tr>
		<br>
		<tr>
			<td>
				Quốc tịch
			</td>
			<td>
				<select name="quoctich">
					<option> VN</option>
					<option> Tàu khựa</option>
					<option> Thai Lan </option>
					<option> Hàn xẻng </option>
				</select>
			</td>

		</tr>
		<tr>
			<td> <input type="submit" name="submit" value="In"> </td>

		</tr>
	</form>
</body>
</html>