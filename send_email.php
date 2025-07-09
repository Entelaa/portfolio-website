<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "entelakelmendi6@gmail.com"; // <- NDËRRO KËTË me emailin tënd
    $subject = "Mesazh i ri nga portfolio";

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $body = "Emri: $name\nEmaili: $email\n\nMesazhi:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Mesazhi u dërgua me sukses!";
    } else {
        echo "Ndodhi një gabim gjatë dërgimit të mesazhit.";
    }
}
?>
