<?php

    include("connect.php");

    echo "Aa gya balak";

?>

<!DOCTYPE html>
<html>
<head>
  <title>Change Password</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
    }

    h2 {
      color: #333;
    }

    .change-password-button {
      display: inline-block;
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      text-align: center;
      text-decoration: none;
      font-size: 16px;
      cursor: pointer;
      border-radius: 4px;
      transition: background-color 0.3s ease;
    }

    .change-password-button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <h2>Change Password</h2>
  <a href="adminchangepass.php"><button class="change-password-button" name="changeadminpass">Change Password</button></a>
</body>
</html>
