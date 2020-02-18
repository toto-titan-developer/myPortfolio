
<?php
if(isset($_POST["submit"])) {
    //Recipient
    $recipient="henderson.wyatt95@outlook.com";
    // Subject
    $subject = $_POST["ContactReason"];

    $sender = $_POST["VisitorName"];
    $senderEmail = $_POST["VisitorEmail"];
    $message = $_POST["VisitorMessage"];

    $mailBody="Name: $sender\r\nEmail: $senderEmail\r\n\r\n$message";

    $result = mail($recipient, $subject, $mailBody);
    var_dump($result);
    // mb_send_mail($recipient, $subject, $mailBody ["From: " + $senderEmail <$senderEmail>]);

    // $thankYou="<p>Thank you! Your message has been sent.</p>";
} else {
    echo "Something Went Wrong!";
    }
?>
