


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
        background-color: rgb(238, 237, 237);
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
	input[type="text"], input[type="password"] { 
		padding: 5px; 
		border-radius: 5px; 
		/* border: none;  */
        width: 250px;
		margin-bottom: 10px; 
        margin-left: 20px;
	} 
	button { 
		background-color: #4CAF50; 
		color: white; 
		padding: 10px; 
		border: none; 
		border-radius: 5px; 
		cursor: pointer; 
	} 
	</style> 
</head> 
<body> 

	<div class="form"> 
		<h2>SignIn</h2><hr><br> <br>
		<form method="POST" action="code.php"> 
			<label>Username:</label><br> 
			<input type="text" placeholder="Enter Username" name="username" required><br> 
			<label>Email:</label><br> 
			<input type="text" placeholder="Enter Email" name="email" required><br> 
			<label>Password:</label><br> 
			<input type="password" placeholder="Enter Password" name="password" required><br> 
			<button type="submit" name="sumbitbtn">SignIn</button>
		</form> 
	</div> 

</body> 
</html>
