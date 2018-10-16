<?php
  if(isset($_POST["submit"])) {
      $recipient = "d_sm9@hotmail.com";
      $subject = "Form to email message";
      $sender = $_POST["name"];
      $senderEmail = $_POST["email"];
      $message = $_POST["comment"];

      $mailBody="Name: " . $sender. "\nEmail: " . $senderEmail ."\n\n" . $message;

      mail($recipient, $subject, $mailBody, "From: " . $sender . "<" . $senderEmail . ">");
      header("Location: contact.php?mailed");
  }
?>
