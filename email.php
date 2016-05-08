<form method="post" action="index.php">
 <?php


$to      = 'nobody@example.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

ini_set('SMTP', "server.com");
ini_set('smtp_port', "25");
ini_set('sendmail_from', "email@domain.com");

?>

<?php echo '<input type="submit" name="email" value="'.$l.'">'?>					

  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "swapnilptrivedi@gmail.com";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['comment'];
  
  echo $email;
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
  }
