<?php
if(isset($_POST["submit"])) {
    $name = $_POST["name"];
    $mailFrom = $_POST["email"];
    $phone = $_POST["phone"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

 
    $mailTo = "elvisofwoirwot@gmail.com";
    $headers = "From ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;


    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsend");
}
?>
































