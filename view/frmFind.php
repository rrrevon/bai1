<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	class="form-control"
</head>
<body>
	<div class="wrapper">
<!-- 		<a href="usercontroller.php?act=frmFind">Tìm số nguyên tố</a>
		<a href="usercontroller.php?act=triangle">Tìm kiếm</a> -->
		<h1>Số nguyên tố</h1>
		<form action="usercontroller.php?" method="post">
			<input type="hidden" name="act" value="result">
			<table>
				<tr>
					<td>n1</td>
					<td><input class="form-control" type="text" id="txtNumber1" name="txtNumber1"></td>
				</tr>
				<tr>
					<td>n2</td>
					<td><input class="form-control" type="text" id="txtNumber2" name="txtNumber2"></td>
				</tr>
				<tr>
					<td colspan="2"><input class="form-control" type="submit" value="ok"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>