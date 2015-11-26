<?php 
	$state = array ('IA'=>'Iwa','MD'=>'Marryland');
	echo $state['MD'];

	echo "<br/>";

	$day = array ('1'=>'mon','tu','tue');
	echo $day[1];

	//数组的初始化
	$tv = array();
	$tv[] = 'fight of the con';
	echo $tv[0];

    //创建连续序列的数字数组，利用rang函数,并把整个数组打印出来。
    $tens = range(1, 10);
    foreach ($tens as $key => $ten) {
    	echo $tens[$key]= $ten;

    }
     
    
     
?>