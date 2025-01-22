<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  // Vytvoření hlavičky e-mailu
  $to = "tvuj-email@domena.cz";
  $subject = "Nová zpráva od $name";
  $headers = "From: $email\r\n";
  $headers .= "Content-Type: text/plain; charset=UTF-8";

  // Odeslání e-mailu
  if (mail($to, $subject, $message, $headers)) {
    echo "Zpráva byla úspěšně odeslána!";
  } else {
    echo "Něco se pokazilo, zkuste to prosím znovu.";
  }
}
?>