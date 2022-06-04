<?php

if(isset($_POST["btn-send"])){
    $userName = $_POST["name"];
    $userEmail = $_POST["email"];
    $userSub = $_POST["subject"];
    $userMsg = $_POST["message"];

    $to = "connect@minkucreation.com";

    mail($to,$userSub,$userMsg,$userEmail);
    mail($userEmail,"MinkuCreation","Thanks For Visiting Minku Creation, We Will Contact You Soon");

    header("location:index.php?success");
}else{
    header("location:index.php");
}

?>