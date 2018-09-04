<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>login</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<h2 class="text-md-center">Đăng nhập</h2>
	<form action="login-user.php" method="post" class="col-md-6 offset-md-3">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Username</label>
	    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Password</label>
	    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
	  </div>
	  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
	</form>
</body>
</html>