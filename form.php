<?php

if($_POST["submit"]) {
    $recipient="your@email.address";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?><!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Contact form to email</title>
</head>

<body>

    <?=$thankYou ?>

    <form action="https://script.google.com/macros/s/AKfycbx3lYe-jSM7sGD7gYfv3gtDvcxOLoMIXUoZOec19Q/exec" method="POST" accept-charset="UTF-8">
    <input id="email" name="email" type="email" />
    <textarea id="comment" name="comment"></textarea>
    <input id="submit" name="submit" type="Submit" />
  </form>

</body>

</html>