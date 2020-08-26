<? php 
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$pclass = $_POST['pclass'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent ="From: $fname, $lname, $pclass \n Message: $subject";
$recipient = "lukas.allison@shelby.kyschools.us";
$subject = "Contact Form";
$mailheader = "From: $email \r \n";
mail(recipient, $subject, $formcontent, $mailheader) or die("Error!")
  echo "Thank you for your feedback!";
?>
