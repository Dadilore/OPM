<?php
session_start();

include("connection.php");
include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>one punch man image gallery</title>
    <style>
        h1 {
  color: red;
  text-align: center;
  font-family: verdana;
  font-size: 50px
}
    img{
        padding: 5px;
        width: 400px;
        border: 1px solid #ddd;
        border-radius: 10px
    }
    </style>
</head>
<body>
<button class="GFG" 
    onclick="window.location.href = 'logout.php';">
        LOGOUT
    </button>

    <h1><b><h3>ONE PUNCH MAN</h3></b></h1>
    
    <br>
    Hello <?php echo $user_data['user_name']; ?>, you can download OPM wallpapers for fun 
    <table>
        <tr>        
         <td><a href="images/opm.jpg" download="opm"><img src="images/opm.jpg" /></a></td>
         <td><a href="images/saigenos2.png" download="saitama and genos"><img src="images/saigenos2.png" /></a></td>
         <td><a href="images/saitaama7.jpg" download="saitama"><img src="images/saitaama7.jpg" /></a></td>
        </tr>

        <tr>
        <td><a href="images/saitama.jpg" download="saitama"><img src="images/saitama.jpg" /></a></td>
        <td><a href="images/saitama4.jpg" download="saitama"><img src="images/saitama4.jpg" /></a></td>
        <td><a href="images/saitama5.jpg" download="saitama"><img src="images/saitama5.jpeg" /></a></td>
        </tr>

        <tr>
        <td><a href="images/saitama6.jpg" download="saitama"><img src="images/saitama6.jpg" /></a></td>
        <td><a href="images/satama2.png" download="saitama"><img src="images/satama2.png" /></a></td>
        <td><a href="images/sensei.jpg" download="saitama"><img src="images/sensei.jpg" /></a></td>
        </tr>
     
    </table>
</body>
</html>