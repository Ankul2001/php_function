<?php

$server="localhost";
$username="root";
$password="";
$host="crud_function";

$connect = mysqli_connect($server,$username,$password,$host);



    if($connect){
       session_start(); 
    }

?>