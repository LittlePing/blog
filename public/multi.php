<<!DOCTYPE html>
<html>
<head>
	<title>Multidimensional Arrays</title>
	<p>Some North American States, Provinces,and Territories:</p>
	<?php #Script 2.7 -multi.php
		//Create one array:
		$mexico = array('YU'=>'Yucatan','BC'=>'Baja California','OA'=>'Oaxaca');

		//Create anthor array:
		$us = array('MD'=>'Maryland','IL'=>'Illiois','PA'=>'Pennsylvania','IA'=>'Iowa');

		//Create a third array:
		$canada = array('QC'=>'Quebec','AB'=>'Alberta','NT'=>'Northwest Territories','YT'=>'Yukon','PE'=>'Prince Edward Island');

		//Combine the arrays:
		//
		$n_america = array('Mexico'=>'$mexico','United States'=>'us','Canada'=>'canada');

	    //Loop through the countries:
	    foreach ($n_america as $country => $list) {
	    	//Print a heading
	    	echo "<h2>$country</h2><ul>";
	    // 	Print each state,province,or territory:
	       foreach ($list as $key => $value) {
	       		//Print the list
	       		echo "<li>$key - $value </li>\n";
	       }
	       //Close the list:
	       echo '</ul>';

	    }  //End of main FOREACH

	?>
</head>
<body>

</body>
</html>