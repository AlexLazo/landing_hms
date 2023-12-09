<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Configurar la dirección de correo electrónico a la que se enviará el mensaje
    $to = "alex.lazo1403@gmail.com";

    // Configurar el asunto del correo electrónico
    $email_subject = "Nuevo mensaje de contacto: $subject";

    // Construir el cuerpo del correo electrónico
    $email_body = "Has recibido un nuevo mensaje de contacto.\n\n";
    $email_body .= "Nombre: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Asunto: $subject\n";
    $email_body .= "Mensaje:\n$message\n";

    // Configurar las cabeceras del correo electrónico
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Enviar el correo electrónico
    if (mail($to, $email_subject, $email_body, $headers)) {
        // El correo electrónico se ha enviado correctamente
        echo "success";
    } else {
        // Se produjo un error al enviar el correo electrónico
        echo "error";
    }
} else {
    // Si no se ha enviado el formulario, redirigir al formulario de contacto
    header("Location: index.html");
    exit();
}
?>