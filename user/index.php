<?php

    include("connect.php");


	

?>


<!DOCTYPE html> 
<html> 
<head> 
	<title>Login Form</title> 
	<style> 
	.form { 
		/* text-align: center;  */
        border: 2px solid ;
        width: fit-content;
        margin: auto;
		margin-top: 100px; 
        background-image: linear-gradient(to left, rgb(222, 234, 247),rgb(233, 245, 225));
        border-radius: 5px; 
        padding: 30px 50px;

	} 
    h2{
       text-align: center;
       font-size: 35px;
    }
    hr{
        height: 5px;
        background-color: rgb(217, 235, 229);
        border-radius: 4px;
    }
	label { 
		display: inline-block; 
		width: 100px; 
		margin-bottom: 10px; 
	} 
	input[type="email"], input[type="password"] { 
		padding: 5px; 
		border-radius: 5px; 
		/* border: none;  */
        width: 250px;
		margin-bottom: 10px; 
        margin-left: 20px;
	} 
	button{ 
		background-color: #4CAF50; 
		color: white; 
		padding: 10px; 
		border: none; 
		border-radius: 5px; 
		cursor: pointer;  
	} 
	a{
		/* border: 1px solid; */
		margin-left: 90px;
	}
	</style> 
</head> 
<body> 

	<div class="form"> 
		<h2>Login Form</h2> 
        <hr><br><br>
		<form method="POST" action="code.php"> 
			<label>UserId:</label><br> 
			<input type="email" placeholder="Enter Userid" name="userid" required><br> 
			<label>Password:</label><br> 
			<input type="password" placeholder="Enter Password" name="password" required><br> 
			<br>
			<button type="submit" name="loginbtn">LogIn</button> 
			<a href="signup.php">Create New Account</a>
		</form> 



	</div> 
						<a href="account_table.php">list</a>	


</body> 
</html>
