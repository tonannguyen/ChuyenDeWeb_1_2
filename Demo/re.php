
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Demo RE</title>
</head>
<body>
	<?php
		if($_POST){
			$string = $_POST['username'];
			$pattern = '#^[A-z][\w\.]{5,31}$#';
			if(preg_match($pattern, $string, $match) == 1){
				$report = '<span style=\'color:#298426\'>Bạn vừa nhập vào một tài khoản hợp lệ!</span>';
			}
			else{
				$report = '<span style=\'color:#FF0400\'>Bạn vừa nhập vào một tài khoản không hợp lệ!</span>';
			}
		}
	?>
	<fieldset>
		<legend><b>Đăng ký tài khoản</b></legend>
		<form method="post">
			Nhập tài khoản hợp lệ: <?php if(isset($report)){echo $report;}?><br />
			<input type="text" name="username" />
			<input type="submit" name="submit_name" value="Đăng ký" />
		</form>
	</fieldset>
</body>
</html>
