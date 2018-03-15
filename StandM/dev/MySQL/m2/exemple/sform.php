<?php
session_start();
try {
	$con = new PDO ("mysql:host=localhost;dbname=cats",'root','');
	if(isset($_POST['signup'])){
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$city = $_POST['city'];

		$insert = $con->prepare("INSERT INTO users(username,email,password,fname,lname,city)
				values(:username, :email, :password, :fname, :lname, :city)
				");
		$insert->bindParam (':username',$username);
		$insert->bindParam (':email',$email);
		$insert->bindParam (':password',$password);
		$insert->bindParam (':fname',$fname);
		$insert->bindParam (':lname',$lname);
		$insert->bindParam (':city',$city);
		$insert->execute();
	}elseif (isset($_POST['signin'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$select = $con->prepare("SELECT*FROM users where username='$username' and password='$password'");
		$select->setFetchMode(PDO::FETCH_ASSOC);
		$select->execute();
		$data=$select->fetch();
		if($data['username']!=$username and $data['password']!=$password)
		{
			echo "Invalid username or Password";
		}
		elseif($data['username']==$username and $data['password']==$password)
		{
			$_SESSION['username']=$data['username'];
			$_SESSION['email']=$data['email'];
			$_SESSION['fname']=$data['fname'];
			$_SESSION['lname']=$data['lname'];
				
			header("location:profile.php");
		}
	}
}
catch (PDOException $e) {

	echo "Error: ". $e -> getMessage();
}
?>



<div style="width:500px ; float: left; height:600px;">
<div style="padding:85px;padding-right:200px;">
<style type = "text/css">
body {
background-image: url(http://www.wallpaperscharlie.com/wp-content/uploads/2016/06/persian-cat-hd-wallpapers-8.jpg);
background-size: cover;
}

.box {
width: 300px;
height: 230px;
background-color: gdba(0,0,0,0.5);
}


</style>
<div class ="box">
Don't have any login yet?
<h1>Register Here</h1>
<form method="post">
<input type="text" name = "username" placeholder = "User Name"> </br> </br>
<input type="text" name = "email" placeholder = "name@domain.com"> </br> </br>
<input type="text" name = "password" placeholder = "********"> </br> </br>
<input type="text" name = "fname" placeholder = "First Name"> </br> </br>
<input type="text" name = "lname" placeholder = "Last Name"> </br> </br>
<input type="text" name = "city" placeholder = "Your City"> </br> </br>

<input type="submit" name = "signup" Value = "Register">

</form>
</div>
</div>
</div>

<div style="width:500px ; float: right; height:600px;">
<div style="padding:85px;padding-right:200px;">
Already, have account?
<h1>Login Here</h1>
<form method="post">
<input type="text" name = "username" placeholder = "User Name"> </br> </br>
<input type="text" name = "password" placeholder = "********"> </br> </br>
<input type="submit" name = "signin" Value = "Login">
</form>
</div>
</div>
