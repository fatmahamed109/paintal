<?php
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

if(isset($_POST['button']))
{
    $host="localhost";
    $user ="root";
    $password="";
    $db="paintal_web_site";
    $conn = Mysqli_connect($host,$user,$password,$db);
    $insert="insert into paintaluserss values('$email','$password')";
    mysqli_query($conn,$insert);
    if($conn){
        echo("<h1 style='color:green;'>your registeration is done!</h1");
    }
    else{
        echo("<h1 style='color:red;'>your registeration is failed!</h1");
    }
}