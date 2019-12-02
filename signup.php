<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head><title>
	Hms-Registration
</title>>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style type="text/css">
	#ab1:hover{cursor: pointer;}
</style>
<body>
<body style="background: url('images/scn6.jpg') no-repeat; background-size: cover;opacity: 0.9">
	<div class="container" style="width: 400px; margin-top: 100px">

		<div class="card">
		<div class="card-body">
			<h1 style="text-align:center;">SIGN UP</h1>
		<form class="form-group" method="POST" action="signup.php">
			<?php include('errors.php')?>
			<label>FullName :</label><br>
			<input type="text" name="fullname" class="form-control" placeholder="enter fullname" value=<?php echo $uname;?>>
			<label>Email :</label><br>
			<input type="text" name="email" class="form-control" placeholder="enter email" value=<?php echo $email;?>>
			<label>RegId :</label><br>
			<input type="text" name="regid" class="form-control" placeholder="enter regid" value=<?php echo $regid;?>>
			<label>FirstPassword :</label><br>
			<input type="text" name="password1" class="form-control" placeholder="enter password" value=<?php echo $pass1;?>>
			<label>ConfirmPassword :</label><br>
			<input type="text" name="password2" class="form-control" placeholder="confirm password" value=<?php echo $pass2;?>>
			<label>Gender :</label><br>
			<input type="checkbox" name="gender" class="form-check-inline" value="female">Female
			<input type="checkbox" name="gender" class="form-check-inline" value="male">Male
			<input type="checkbox" name="gender" class="form-check-inline" value="other">Other
			<input type="submit" name="login_submit" value="Submit" id="ab1" class="btn btn-primary">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAlready a member? <a href="login.php">Sign in</a>
         </form>
			<div>
				
			</div>


	</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>