<?php
$string = $_POST['test'];
$http_regex = "/https?:\/\/(?:[-\w]+\.)?([-\w]+)\.\w+(?:\.\w+)?\/?.*/i";
preg_match_all($http_regex, $string, $matches);
echo '<pre>';
print_r($matches);
echo '</pre>';

?>
<fieldset>
	<form method="post">
		<input type="test" name="test">
		<input type="submit" name="submit" value="Submit">
	</form>
</fieldset>