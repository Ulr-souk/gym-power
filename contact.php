<?php
// contact.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name    = htmlspecialchars($_POST['name']);
  $email   = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
  $message = htmlspecialchars($_POST['message']);
  
  if ($email) {
    // Paramètres de mail()
    $to      = 'contact@gympower.com';
    $subject = "Nouveau message de $name";
    $body    = "Nom : $name\nEmail : $email\n\n$message";
    $headers = "From: noreply@gympower.com\r\nReply-To: $email";

    if (mail($to, $subject, $body, $headers)) {
      echo "<p>Merci, votre message a bien été envoyé.</p>";
    } else {
      echo "<p>Erreur lors de l’envoi. Merci de réessayer.</p>";
    }
  } else {
    echo "<p>Email invalide.</p>";
  }
} else {
  // Redirection si accès direct
  header('Location: contact.html');
  exit;
}
?>