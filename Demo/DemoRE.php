<?php 

	$subject = 'Hello "Everybody", welcome to "my world"';
	preg_match('/"(.+?)"/', $subject, $matches1);
	preg_match_all('/"(.+?)"/', $subject, $matches2);
	echo '<pre>';
	echo "Chuỗi ban đầu:".$subject ;
	echo '</br>Lấy chuỗi trong dấu ""</br>';
	echo "Kết quả trả về của hàm pre_mach: </br>";
	print_r($matches1);
	echo "Kết quả trả về của hàm pre_mach_all:</br>";
	print_r($matches2);
	echo '</pre>';
	
 ?>