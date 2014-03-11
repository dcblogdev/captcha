<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Example</title>
</head>

<body>

<?php

//run the code only if the form has been submitted
if(isset($_POST['submit'])){

	if($_SESSION["captcha"]!==$_POST["captcha"])
	{
		echo 'Characters do not match the black characters on the image.';
	} else {
		echo 'Matched';
	}
}

?>

<form action="" method="post">
<p>Only enter the 3 <b>black</b> characters:</p>
<p><img src="captcha.php" alt="captcha image" id="captcha"><a href="#" onclick="document.getElementById('captcha').src = 'captcha.php?' + Math.random(); return false">Reload Image</a><br /><input type="text" id="captcha" name="captcha" size="3" maxlength="3"></p>
<p><input type="submit" name="submit" value="Submit" />
</form>

</body>
</html>