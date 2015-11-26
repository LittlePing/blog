<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<title>Simple HTML Form</title>
	<style type="text/css" title="text/css" media="all">
		label{
			font-weight: blod;
			color: #300ACC;
		}
	</style>

</head>
<body>
	<!--Script 2.1 -form.php-->
	<form action="handle_form.php">
	<fieldset><legend>Enter you information in the form below:</legend>
		<p><label>Name:<input type="text" name="name" size="20" maxlength="40"/></label></p>
		<p><label>Email:<input type="text" name="email" size="40" maxlength="60"/></label></p>
		<p><label for="gender">Gender:</label><input type="radio" name="gender" value="M" />Male
			<input type="radio" name="gender" value="F"/>Female</p>
		<p><label>
			Age:<select name="age">
				<option value="0-29">Under 30</option>
				<option value="30-60">Between 30 and 60</option>
				<option value="60+">Over 60</option>
			</select>
		</label></p>
		<p><label>Comments:<textarea name="comments" rows=3 cols=4></textarea></label></p>

	</fieldset>
	<p align="center"><input type="submit" name="submit" value="Submit My Information"/></p>
	</form>
</body>
</html>