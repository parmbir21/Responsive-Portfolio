<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];

  $mailTo = "parmbir21@gmail.com"
  $headers = "From: ".$visitor_email;
  $txt = "You have received an email from ".$name.".\n\n".$message;
  $subject = "Website Message!"

  mail($mailTo,$subject,$txt,$headers);
  header("Location: contact.html");
}
?>