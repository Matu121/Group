<?php
session_start();

?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $to = 'matias.lindvall@gmail.com'; 
  $name = $_POST['name'];
  $email = $_POST['email'];
  $interest = $_POST['interest'];
  $message = $_POST['message'];
  $subject = 'New message from ' . $name;
  $headers = 'From: ' . $name . ' <' . $email . '>' . "\r\n" .
             'Reply-To: ' . $email . "\r\n" .
             'X-Mailer: PHP/' . phpversion();

  if (mail($to, $subject, $message, $headers)) {
    $message = 'Your message has been sent. Thank you!';
  } else {
    $message = 'There was an error sending your message. Please try again later.';
  }

  header('Location: contact.php?message=' . urlencode($message));
  exit();
}
?>


