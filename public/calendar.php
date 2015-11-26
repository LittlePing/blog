<<!DOCTYPE html>
<html>
<head>
	<title>Calendar</title>
</head>
<body>
	<form action="calendar.php" method="post">
	<?php #script 2.6 - calendar.php
	//This script makes three pull-down menus
	//for an html form:months,days,years.
	
	//Make the months arry:
	$months = array (1=>'January','February','March','April','May','June','July'
		,'August','Setpember','October','December','November');

	//Make the years and days array
	$days = range(1,31);
	$years = range(2011,2021);

	//Make the months pull-down menu
	echo '<select name="month">';
	foreach ($months as $key => $value) {
		echo "<option value=\"$value\"> $value</option>\n";
	}
	echo '</select>';

	//Make the days pull-down menu
	echo '<select name="day">';
	foreach ($days as  $value) {
		echo "<option value=\"$value\">$value</option>\n";
	}
	echo '<select>';

	//Make the years pull-down menu
	echo '<select name=year>';
	foreach ($years as $v) {
		echo "<option value=\"$v\">$v</option>\n";
	}
	echo '</select>';
	?>
</form>
</body>
</html>

<!--  1.要确定数组中元素的个数可以使用count()
2.rang)函数也可以创建连续字母的数组
$alphabet = rang('a','z');
3.数组的键可以是由多个单词组成的字符串，如first name等
4.is_array()函数可以判断一个变量的数组类型
5.如果看到Invalid argument supplied for foreach（）（为foreach（）提供了无效的参数）出错消息，
这意味这你在为foreach循环上使用不是数组类型的变量-->
