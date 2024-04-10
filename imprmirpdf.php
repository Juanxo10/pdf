<?php
// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica si se han recibido los datos de inicio de sesión
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        // Aquí iría la lógica para verificar las credenciales de inicio de sesión
        // Por ejemplo, podrías consultar una base de datos para verificar las credenciales

        // Supongamos que las credenciales son válidas (en un entorno real, debes realizar una verificación segura)
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Redirige al usuario a una página de éxito
        header("Location: success.php");
        exit();
    } else {
        // Si no se han recibido los datos de inicio de sesión, muestra un mensaje de error
        echo "Por favor, ingresa un nombre de usuario y una contraseña.";
    }
}
?>
