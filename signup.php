<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "<p><font color = red>Please enter some valid information!";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>

<style type="text/css">
  body, html {
  height: 100%;

  /* The image used */
  background-image: url("images/saigenos.jpeg");

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

 #text{

height: 25px;
border-radius: 5px;
padding: 4px;
border: solid thin #aaa;
width: 100%;
}

#button{

padding: 10px;
width: 100px;
color: white;
background-color: red;
border: none;
}

#box{

background-color: yellow;
margin: auto;
width: 300px;
padding: 20px;
}

</style>

</head>
<body>


<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: black;"><b>SIGNUP</b></div>

			<b>username</b><input id="text" type="text" name="user_name" placeholder="enter your username"><br><br>
			<b>password</b><input id="text" type="password" name="password" placeholder="enter your password"><br><br>
            
            <input id="button" type="submit" value="Signup"><br><br>
            

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div> 

</body>
</html>