<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = "ejimenez@conicet.gov.ar";
    $subject = "Mensaje de " . $name;
    $body = "Has recibido un nuevo mensaje de " . $name . " (" . $email . "):\n\n" . $message;
    $headers = "From: " . $email;

    if (mail($to, $subject, $body, $headers)) {
        echo "El correo ha sido enviado exitosamente.";
    } else {
        echo "Hubo un error al enviar el correo.";
    }
}
?>
