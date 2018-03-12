
<?php
	$email = "abc123@sdsd.com"; 
	$regex = '/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/'; 
	if (preg_match($regex, $email)) {
	 echo $email . " is a valid email.";
	} else { 
	 echo $email . " is an invalid email.";
	}           
?>