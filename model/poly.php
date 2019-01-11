<?php 
	class Poly {
		function isSoNguyenTo($x) {
			//Cho x là số nguyên tố 
			$isSNT = true;
			//kiểm tra
			for ($i=2; $i < $x; $i++) { 
				if ($x % $i == 0) {
					$isSNT = false;
					break;
				}
			}
			return $isSNT;
		}

		function getList($x, $y) {
			for ($i=$x+1; $i <= $y ; $i++) { 
				if ($this-> isSoNguyenTo($i)) {
					echo $i . "<br>";
				}
			}
		}
	}
 ?>