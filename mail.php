<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "amrelqattan@gmail.com";

mail($recipient, $subject, $message, $mailheader)
or die("Error!");

echo'



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kerri</title>
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="icon" href="images/logo.png" />
  </head>
  <body data-bs-spy="scroll" data-bs-target="#nav-active">
    <!-- setting icon fixed -->


    <!-- start contact -->
    <section id>
    <h1>thank you for send email</h1>
    <a href="index.html">go back</a>
    </section>
    <!-- end contact -->

    <script src="js/all.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>


';





?>