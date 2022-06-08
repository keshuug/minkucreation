<?php

if(isset($_POST["btn-send"])){
    $userName = $_POST["name"];
    $userEmail = $_POST["email"];
    $userSub = $_POST["subject"];
    $userMsg = $_POST["message"];
    // $headers = "From:" . $from;
    $from = "MinkuCreation@minkucreation.com";
    $headers  = "From: $from\r\n"; 
    $headers .= "Content-type: text/html\r\n";
    
    $to = "connect@minkucreation.com";
    $messege = "
    <html>
    <head>
    <title>Minku Creation</title>
    </head>
    <body>
    <h1>Minku Creation </h1><br/><br/><br/>
    <p>Dear $username<br/>
    Thanks For Visiting <b>Minkucreation</b><br/>
    We Will Contact You Soon On $userEmail <br/></p>
    </body>
    </html>
    ";
    

    mail($to,$userSub,$userMsg,$userEmail);
    mail($userEmail,"Thanks For Visiting Minku Creation",$messege,$headers);

    header("location:index.php?success");
}else{
    header("location:index.php");
}

?>