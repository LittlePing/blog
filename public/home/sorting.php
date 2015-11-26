<html >
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<title>Sorting Arrays</title>
</head>
	<body>
		<table border="0" cellpadding="3" cellspacing="3" align="center" >
			<tr><td><h2 >Rating</h2></td>
				<td><h2>Title</h2></td>
			</tr>
			<<?php #Script2.8 -sorting.php
				//Create the arrays
				$movies = array ('Caslanca'=>10,'hello body'=>10,'Tantanic'=>7,'Stranger Than Fiction'=>9,'You are so beautiful'=>2);

				//Display the movies in their original order:
				echo '<tr><td colspan="2"><b>In their original order:</b></td></tr>';
				foreach($movies as $title => $rating) {
				 	echo "<tr><td>$rating</td>
				 		 <td>$title</td></tr>\n";
				 } 
			//Display the movies sorted by title:
			 krsort($movies);
			 echo "<tr><td colspan=2><b>Sorted by title:</b></td></tr>";
			foreach($movies as $title => $rating) {
				 	echo "<tr><td>$rating</td>
				 		 <td>$title</td></tr>\n";
				}

		    //Display the movies sorted by rating:
		    arsort($movies);
		    echo "<tr><td colspan=2><b>Sorted by rating:</b></td></tr>";
		    foreach($movies as $title =>$rating)
		    {
		    	echo "<tr><td>$rating</td><td>$title</td></tr>\n";
			
		    }
		     ?>
		</table>
	</body>
</html>