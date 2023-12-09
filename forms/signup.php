<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener el correo electrónico ingresado en el formulario
  $email = $_POST["email"];

  // Validar el correo electrónico (puedes agregar más validaciones según tus necesidades)
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // El correo electrónico no es válido
    echo "error";
    exit;
  }

  // Guardar el correo electrónico en una base de datos o enviarlo a un servicio de suscripción
  // Aquí puedes agregar tu lógica para guardar el correo electrónico en tu base de datos o enviarlo a un servicio de suscripción

  // Si todo va bien, puedes enviar una respuesta de éxito
  echo "success";
  exit;
}
?>