<!DOCTYPE html>
<html>
<head>
	<title>Form Feedback</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<body>
<?php #Script 2.2 - handle_form.php
//Create a shorthand for the form data:
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$comments = $_REQUEST['comments'];
		/*
		Not used
		$_REQUEST['age'];
		$_REQUEST['gender'];
		$_REQUEST['submit'];
		 */
		//Print the submitted information
		echo "<p>Thank you ,<b>$name</b>for the following comments:<br/>
		<tt>$comments</tt></p>
		<p>We will reply to you at <i>$email</i>.</p>\n";
		
?>
</body>
</html>