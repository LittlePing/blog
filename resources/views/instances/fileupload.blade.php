<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<form action="/request/file-upload" method="POST" encrypt="multipart/form-data">
<!--       		{!!csrf_field()!!}-->
		{!!csrf_field()!!}
 		<input type="file" name="file"><br/><br/>
      		<input type="submit" value="提交"/>
      	</form>
</body>
</html>