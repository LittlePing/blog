<?php 
	if($_FILE['userfile']['type'])!="image/gif"{
		//检测Content-Type
		echo "Sorry,we only allow uploading GIF images";
		exit;
	}
	$uploaddir = 'uploads/';
	$uploadfile = $uploaddir.basename($FILES['username']['name']);
	if(move_uploaded_file($_FILE['userfile']['tmp_name'], $uploadfile))
	{
		echo "File is valid,and was successfully uploaded.\n";

	}
	else{
		echo "File uploading failed.\n";
	}
?>
