<?php
if(isset($_POST['submit'])){
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);
}

$myMail = "techdevst@gmail.com";
$header = "From: " . $email;
$message2 = "You have received a message from" . $name . ", \n\n" . $message;

mail($myMail, $subject, $message. $header);
 header("Location: thanks.php?mailsend")
?>