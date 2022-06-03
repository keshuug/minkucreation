<?php

if(isset($_POST["btn-send"])){
    $userName = $_POST["name"];
    $userEmail = $_POST["email"];
    $userSub = $_POST["subject"];
    $userMsg = $_POST["message"];

    $to = "no-reply@minkucreation.com";

    mail($to,$userSub,$userMsg,$userEmail);

    header("location:index.php?success");
}else{
    header("location:index.php");
}

?>