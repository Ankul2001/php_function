<?php

    include("connect.php");



    // admin login start

    if(isset($_POST['adminlogbtn'])){
        $adname=mysqli_real_escape_string($connect,stripcslashes($_POST['adminname']));
        $adpass=md5(mysqli_real_escape_string($connect,stripcslashes($_POST['adminpass'])));

        adminlog($connect,$adname,$adpass);
    }

    function adminlog($con ,$an ,$ap){
        $sql = "   SELECT * FROM adminlogin WHERE Name='$an'AND Password ='$ap'";
        
    
        $result= mysqli_query($con,$sql);
        if($result){
            echo "hogya";
        }
        if(mysqli_num_rows($result)==1){
            $rows=mysqli_fetch_assoc($result);
            $_SESSION['adminid']=$rows['s_no'];
            ?>
            <script>
                window.location.href="adminpage.php";
            </script>
            <?php
        }
        else{
        ?>
             <script>
                alert("Invalid Username OR Password");
                window.location.href="index.php";
            </script>
        <?php
    }
    }


    // adminlogin end


    //admin change password


    if(isset($_POST['changedpassword'])){

        $currentpass=md5($_POST['currentPassword']);
        $newpassword= md5($_POST['newPassword']);
        $conformpass=md5($_POST['confirmPassword']);

        $admin=$_POST['hiddine_id'];
        if($newpassword==$conformpass){
            
        if(validateCurrentPassword($connect,$currentpass,$admin)){
            changePassword($connect,$newpassword,$admin);
        }
        else{
            ?>
            <script>
            alert("Invalid Current Password");
            window.location.href="adminchangepass.php";
            </script>
            <?php
        }
    }
    else{
        ?>
        <script>
            alert("nao or conform balo mil nhi rho");
            window.location.href="adm.php";
        </script>
        <?php
    }

    }


    function validateCurrentPassword($con ,$cp ,$a){
        $sql = "SELECT * FROM adminlogin WHERE s_no='$a'AND Password ='$cp'";

        $result=mysqli_query($con,$sql);
        if(mysqli_num_rows($result)==1){
            return true;
        }
        else{
            return false;
        }
    }

    function changePassword($con, $np, $a){
        $sql= "UPDATE adminlogin SET Password='$np' WHERE s_no='$a'";
        if(mysqli_query($con,$sql)){
            ?>
            <script>
                confirm("Sahi me kar de !!! ");
                alert("Ho Gya");
                window.location.href="index.php";
            </script>
            <?php
        }

    }