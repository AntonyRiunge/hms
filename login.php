<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<?php 
//DEFINE VARIABLES AND SET TO EMPTY
$uname = $pass ="";
$unameErr =$passErr="";
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	if(empty($_POST['username']))
	{
		$unameErr ="Name is required";
	}else{
		$uname =test_input($_POST['username']);
		//check if name is only contain letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/", $uname)) {
			$unameErr = "Only letters and white space allowed";
		}
	}
	if (empty($_POST['password'])||($_POST['password']=="")){
		$passErr = "Password required";
	}else{
		$pass = $_POST['password'];
	}
	//$uname = test_input($_POST["username"]);
	//$pass = test_input($_POST["password"]);
}
function test_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}



 ?>

<style type="text/css">
	#ab1:hover{cursor: pointer;}
</style>
<body style="background: url('images/scn6.jpg') no-repeat; background-size: cover;opacity: 0.9">
<div class="container" style="width: 400px; margin-top: 100px">
	<img src="images/scn1.jpg" class="card-img-top">
	<div class="card">
		<div class="card-body">
	<form class="form-group" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label>Username :</label><br>
		<input type="text" name="username" class="form-control" placeholder="enter username" value=<?php echo $uname;?>>
		<span class="error"> <?php echo $unameErr;?></span><br>
		<label>Password :</label><br>
		<input type="text" name="password" class="form-control" placeholder="enter password" value=<?php echo $pass?>>
		<span class="error"> <?php $passErr?></span>
		<br>
		<input type="submit" name="login_submit" value="Login" id="ab1" class="btn btn-primary">
		<br>
		

	</form>
	<?php
	echo $uname;
echo $pass;

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>