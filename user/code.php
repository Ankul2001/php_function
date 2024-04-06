<?php

    include("connect.php");

    // signup from start

        if(isset($_POST['sumbitbtn'])){
            $name=$_POST['username'];
           $email=$_POST['email'];
            $password=$_POST['password'];
            signup($connect,$name,$email,$password);            //ye function ki values hai 
        }

    //ye $c,$n...... ye velue ko pass krane ke liye hai
        function signup($c,$n,$e,$p) {                          
            $sql="INSERT INTO login (name,email,  password) VALUES ('$n','$e','$p')";
            if(mysqli_query($c,$sql)){
              ?>
              <script>
                 alert("Account Created");
                    window.location.href="index.php";
                </script>
                <?php
            }
            else
            {
                echo"chal nikal";
            }
        }

        // signup  from end



        // login  from start

        if(isset($_POST['loginbtn'])){
            $userid=$_POST['userid'];
            $password=md5($_POST['password']);
            
            login($connect,$userid,$password);
        }
        
        function login($c,$i,$p){
            $sql= "SELECT * FROM login WHERE email='$i' and password='$p'";
            $result= mysqli_query($c,$sql);
            if(mysqli_num_rows($result)==1){
                
                $user= mysqli_fetch_assoc($result);
                $_SESSION['loginid']= $user['email'];
                 $_SESSION['loginname']= $user['name'];
                ?>
                    <script>
                      window.location.href="page.php"
                    </script>
                <?php
                
            }
            else{
                
                ?>
                    <script>
                      window.location.href="login2.php"
                    </script>
                <?php
            }

        }

        // login  from end


        // logout  from start

        if(isset($_REQUEST['do'])=='logout'){
            session_start();
            session_destroy();
            ?>
                <script>
                      window.location.href="index.php"
                </script>
            <?php
        }
            //logout end

?>