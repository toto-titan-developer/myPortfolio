
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

    mail($recipient, $subject, $mailBody);

    $thankYou="<p>Thank you! Your message has been sent.</p>";
} else {
    echo "Something Went Wrong!";
    }
?>



<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>W.H Contacts</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="form-align">
        <div id="form-bg">
            <form action="contact.php" method="POST" enctype="multipart/form-data" name="EmailTetsForm">
                Email: <br>
                <input type="email" name="VisitorEmail" placeholder="Enter Your Email" required> <br>
                Name: <br>
                <input type="text" name="VisitorName" placeholder="Enter Your Name" required> <br>
                Reason for Contacting: <br>
                <select name="ContactReason" class="reasons" required>
                    <option value="Job Offer">Job Offer</option>
                    <option value="Project Proposal">Project Proposal</option>
                    <option value="Other">Other</option>
                </select> <br>
                Your Message: <br>
                <textarea name="VisitorMessage" class="message" placeholder="Your Message"></textarea> <br>
                <input type="submit" class="submit" value="send">
            </form>
        </div>
    </div>

    <nav id="bottom-nav">
        <ul id="bottom-nav-links">
            <li><a id="links" href="index.html">Home</a></li>
            <li><a id="links" href="about.html">About</a></li>
            <li><a id="links" href="projects.html">Projects</a></li>
        </ul>
    </nav>
    
    <script type="text/javascript" src="script.js"></script>
</body>
</html> -->