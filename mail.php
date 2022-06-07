<?php

if(isset($_POST["btn-send"])){
    $userName = $_POST["name"];
    $userEmail = $_POST["email"];
    $userSub = $_POST["subject"];
    $userMsg = $_POST["message"];
    $headers = "From:" . $from;
    $from = "no-reply@minkucreation.com";
    $to = "connect@minkucreation.com";

    mail($to,$userSub,$userMsg,$userEmail);
    mail($userEmail,"MinkuCreation","Thanks For Visiting Minku Creation, We Will Contact You Soon",$header);

    header("location:index.php?success");
}else{
    header("location:index.php");
}

?>