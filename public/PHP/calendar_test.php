<!DOCTYPE html>
<html>
<head>
	<title>calendar</title>
</head>
<body>

		<form action=calendar_test.php method="post">
		<?php #calendar script
		//This script make three pull down menu 
		//The form html for the month,day,year array
		

		/////////////////////////
		//Make the month array //
		/////////////////////////
		$months = array (1=>'January','February','March','April','May','June',
			'July','August','Setpember','October','November','December');
		//Make the day and year array
		//$days = range (1,31);
		//$years = range (2011,2022);

		//Make the month pull-down menu
		
		echo '<select name ="month">';
		foreach ($months as $key =>$value) {
			echo "<option value=\"$value\">$value</option>\n";
		}
		echo '</select>';

		//Make the day pull-down menu
		echo '<select name=day>';
	//	foreach ($days as  $value)
			for($day = 1;$day<31;$day++) {
			echo "<option value=\"$day\">$day</option>\n";
		}
		echo '</select>';

		//Make the year pull-down menu
		echo '<select name = year>';
	//	foreach ($years as $value) 
	 	for($year=2011;$year<=2021;$year++){
			echo "<option value=\"$year\">$year</option>\n";
		}
		echo '</select>';


		?>
		</form>		
</body>
</html>