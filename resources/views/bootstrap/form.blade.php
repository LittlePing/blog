<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
	<form class="form form-horizontal " role="form">
		<div class="form-group">
			<label class="col-sm-2 control-label" >username</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" placeholder="username">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-lable">password</label>
			<div class="col-sm-10">
				<input type="password" class="form-control" placeholder="password">
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<label>
					<input type="checkbox">记住密码
				</label>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<label>
					<button type="submit" class="btn btn-default">Login</button>
				</label>
			</div>
		</div>
	</form>
</body>
</html>