<?php 

    include("connect.php");
    // session_start();
    session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        
        .container {
            max-width: 400px;
            margin: 0 auto;
            background: #f2f2f2;
            padding: 20px;
            border: 1px solid gray;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        .container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .form-group {
            margin: auto;
            width: 90%;
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        
        .form-group input {
            width: 90%;
            margin: auto;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        
        .form-group button {
            width: 40%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            margin: auto;
            background: #4CAF50;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Admin Login Form</h2>
        <form action="code.php" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="adminname" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="adminpass" required>
            </div>
            <div class="form-group">
                <button type="submit" name="adminlogbtn">Login</button>
            </div>
        </form>
    </div>
</body>
</html>
