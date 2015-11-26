<html>
<head><title>Login Page</title></head>
<body>
<form action="/user/submitLogin" >
   Username:<input type="hidden" name="_token" value="{{ csrf_token(username) }}"><br/>
    Password:<input type="hidden" name="_token" value="{{ csrf_token(password) }}"><br/>
    <input type="submit" value="submit"/>
</form>
</body>
</html>