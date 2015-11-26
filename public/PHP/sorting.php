<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<title>Sorting Array</title>
</head>
<body>
	<table cellpadding="3" cellspacing="3" border=0 align="center">
		<tr>
		<td><h2>Rating</h2></td>
		<td><h2>Title</h2></td>
		</tr>
		<?php #Script 2.8 sorting.php
		//Create the array
		$movies = array ('hello boy'=>10,'The Hunter'=>10,'The kingdom'=>5,'Stanger Than Fiction'=>9,'Yellow'=>2);

		//echo the original order:
		echo "<tr><td colspan=2><b>The original order:</b></td></tr>";
		foreach ($movies as $title => $rating) {
			echo"<tr><td>$rating</td><td>$title<td></td></tr>\n";
		}

		//Sorted by the title:
		ksort($movies);
        //Display the array sorted by title
		echo "<tr><td colspan=2><b>Sorted by Title:</b></td></tr>";
		foreach ($movies as $title => $rating) {
			echo"<tr><td>$rating</td><td>$title<td></td></tr>\n";
		}

		//Sorted by the rating:
		asort($movies);
		echo "<tr><td colspan=2><b>Sorted by Rating:</b></td></tr>";
		foreach ($movies as $title => $rating) {
			echo"<tr><td>$rating</td><td>$title<td></td></tr>\n";
		}
		?>
	</table>
</body>
</html>