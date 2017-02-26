<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title> Bài 3</title>
</head>
<body>
	<?php 
		$gio=$_POST['txtgio'];
	 ?>
	<form action="" method="post">
		<table>
			<tr>
				<td colspan="2"> CHÀO THEO GIỜ </td>
			</tr>
			<tr>
				<td> Nhập giờ </td>
				<td> <input type="text" name="txtgio" value="<?php echo $gio; ?>"></td>
			</tr>
			<tr>
				<td colspan="2"> <label>

									<?php
		
		if ($gio==null){
			echo "";
		}
		elseif ($gio < 12) {
			echo "Chào buổi sáng";
		}
		elseif ($gio == 12) {
			echo "Chào buổi trưa";
		}
		elseif($gio < 24){
			echo "Chào buổi tối";
		}
		else{
			echo "Không xác định";
		}

	?>



								  </label>  </td>
			</tr>
			<tr>
				<td> <input type="submit" name="submit" value="submit"> </td>
			</tr>

		</table>
	</form>

</body>
</html>