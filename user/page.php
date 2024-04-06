<?php

    include("connect.php");

  
       
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
</head>
<body>


    <?php
    if(!isset($_SESSION['loginid'])){
        ?>
            <script>
                window.location.href="index.php"
            </script>
            <?php
    }
    else{

    ?>
    <div style="display: flex; font-size: 50px">
    <h1>Hello! <?php  echo  $_SESSION['loginname'];
    ?></h1>
    </div>

    <a href="code.php?do=logout"><button type="submit" name="logoutbtn" onclick=" return confirm('Are You Sure Want To Logout ?')">Logout</button></a>
</body>
</html>

<?php

    }
    ?>
