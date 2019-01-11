<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		$n1 = $_POST["txtNumber1"];
		$n2 = $_POST["txtNumber2"];

		$poly = new Poly();
		$poly->getList($n1,$n2);
	 ?>
</body>
</html>