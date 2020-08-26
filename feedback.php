<?php
$msg = "Name:t$fnamen";
$msg = "Name:t$lnamen";
$msg = "Email:t$emailn";
$msg = "PClass:t$pclassn";
$msg = "Feedback:t$feedbackn";
$recipient = "lukas.allison@shelby.kyschools.us";
$subject = "Feedback from Allison's Art Room";
$mailheaders = "Reply-To:$emailn";
mail($recipient, $subject, $msg, $mailheaders);
header("Location:http://www.yoursite.com/thankyou.html");
?>
