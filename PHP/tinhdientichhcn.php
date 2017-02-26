<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php
		$chieudai=$_POST['txtchieudai'];
		$chieurong=$_POST['txtchieurong'];
		$dientich=$chieudai*$chieurong;
	?>

	<form action="" method="POST">
		<table border="0" bgcolor="pink" align="center" width="600">
			<tr>	
				<td colspan="2"> <center> TÍNH DIỆN TÍCH HÌNH CHỮ NHẬT </center> </td>
			</tr>
			<tr>
				<td> Chiều dài </td>
				<td> <input type="text"  name="txtchieudai" value="<?php echo $chieudai; ?>"> </td>
			</tr>
			<tr>
				<td> Chiều rộng </td>
				<td> <input type="text" name="txtchieurong" value="<?php echo $chieurong ?>"> </td>
			</tr>
			<tr>
				<td> Diện tích </td>
				<td> <input type="text" readonly="true" name="txtdientich" value="<?php echo $dientich;  ?>"> </td>
			</tr>
			<tr>
				<td colspan="2" align="center"> <input type="submit" name="submit" value="Tính"> </td>
			</tr>
		</table>
	</form>
</body>
</html>