<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<br><br><br><br><br>
		<h3>Log in Form</h3>
		<br><br>
		<form method="POST" action="formprocess.php">
			<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" name="uemail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" name="pass" class="form-control" id="exampleInputPassword1">
			</div>
				<button type="submit" name="login" class="btn btn-primary">Submit</button>
		</form>

</body>
</html>