<?php

if(isset($_POST["btn-send"])){
    $userName = $_POST["name"];
    $userEmail = $_POST["email"];
    $userSub = $_POST["subject"];
    $userMsg = $_POST["message"];
    // $headers = "From:" . $from;
    // $from = "no-reply@minkucreation.com";
    $to = "connect@minkucreation.com";
    $messege = `
    <!DOCTYPE html>
    <head>
    <title>Minku Creation</title>
    </head>
    <body>
    <h1>MinkuCreation</h1>
    </body>
    </html>
    `;

    mail($to,$userSub,$userMsg,$userEmail);
    mail($userEmail,"MinkuCreation",$messege);

    header("location:index.php?success");
}else{
    header("location:index.php");
}

?>