<?php

    include("connect.php");

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
    .form{
        max-width: 500px;
        margin: auto;
        border: 1px solid gray;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
      color: #333;
      text-align: center;
      margin-bottom: 50px;
    }

    form {
      max-width: 400px;
      margin: 0 auto;
    }

    label {
      display: block;
      margin-bottom: 5px;
      color: #333;
    }

    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
      border-radius: 5px;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<?php
        if(!isset($_SESSION['adminid'])){
            ?>
            <script>
                window.location.href="index.php";
            </script>
            <?php
        }
?>

<body>
    <div class="form">
  <h2>Change Password</h2>
  <form action="code.php" method="POST">
    <label for="currentPassword">Current Password:</label>
    <input type="password" id="currentPassword" name="currentPassword" required>
    
    <label for="newPassword">New Password:</label>
    <input type="password" id="np" name="newPassword" required>
    
    <label for="confirmPassword">Confirm New Password:</label>
    <input type="password" id="cp" name="confirmPassword" onkeydown="para()" required>
    <input type="hidden" name="hiddine_id" value="<?php echo $_SESSION['adminid']?>">
    <p id="para"></p>
    <input type="submit" value="Change Password" name="changedpassword">
  </form>
  </div>

<script>
  function para(){
  var cp=document.getElementById("cp").value;
  var np=document.getElementById("np").value;
  var para=document.getElementById("para");

  if(np!=cp){
    para.innerHTML="Password is not match";
    para.style.color="red";
  }
}
</script>
  
</body>
</html>
