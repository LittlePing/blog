<!DOCTYPE html>
<html>
<head>
	<title>show.blade.php</title>
</head>
<body>
	<div>
	   <table>
	    <th>ID</th>
	    <th>Username</th>
	    <th>Password</th>
	    <th>Email</th>
      @foreach($fedoras as $f)
	    <tr>
        <td>{{$f->id}}</td>
        <td>{{$f->name}}</td>
        <td>{{$f->password}}</td>
        <td>{{$f->email}}</td>
        </tr>
     @endforeach
	   </table>
	</div>
</body>
</html>