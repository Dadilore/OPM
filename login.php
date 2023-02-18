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

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "<p><font color = red> wrong username or password!</p>";
		}else
		{
			echo "<p><font color = red>wrong username or password!</p>";
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

<style type="text/css">
  body, html {
  height: 100%;

  /* The image used */
  background-image: url("images/saitama3.png");

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
			<div style="font-size: 20px;margin: 10px;color: black;"><b>LOGIN</b></div>

			<b>username</b><input id="text" type="text" name="user_name" placeholder="enter your username"><br><br>
			<b>password</b><input id="text" type="password" name="password" placeholder="enter your password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="signup.php">Click to Signup</a><br><br>
		</form>
	</div> 

</body>
</html>