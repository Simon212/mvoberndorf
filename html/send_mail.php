<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Daten aus dem Formular holen und sicherstellen, dass sie sicher sind
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Ziel-E-Mail-Adresse
    $to = "simon.groebner@sz-ybbs.ac.at"; // Ersetzen Sie dies durch Ihre E-Mail-Adresse
    $subject = "Neue Anfrage von $name";
    $body = "Name: $name\nE-Mail: $email\n\nNachricht:\n$message";
    $headers = "From: $email";

    // Versuche, die E-Mail zu senden und gebe eine Rückmeldung
    if (mail($to, $subject, $body, $headers)) {
        echo "E-Mail erfolgreich gesendet.";
    } else {
        echo "Fehler beim Senden der E-Mail.";
    }
} else {
    echo "Ungültige Anfrage.";
}
?>
