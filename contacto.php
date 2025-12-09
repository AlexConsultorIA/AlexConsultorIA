<?php
// public/contacto.php
require_once __DIR__ . '/../includes/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombreTaller   = trim($_POST['nombre_taller'] ?? '');
    $nombreContacto = trim($_POST['nombre_contacto'] ?? '');
    $telefono       = trim($_POST['telefono'] ?? '');
    $email          = trim($_POST['email'] ?? '');
    $mensaje        = trim($_POST['mensaje'] ?? '');

    $errores = [];

    if ($nombreTaller === '')   $errores[] = "El nombre del taller es obligatorio.";
    if ($nombreContacto === '') $errores[] = "El nombre de contacto es obligatorio.";
    if ($telefono === '')       $errores[] = "El teléfono es obligatorio.";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errores[] = "El email no es válido.";
    if ($mensaje === '')        $errores[] = "El mensaje no puede estar vacío.";

    if (empty($errores)) {
        $to      = $contactEmail;
        $subject = "Nueva solicitud de demo - " . $nombreTaller;
        $body    = "Taller: $nombreTaller\n".
                   "Contacto: $nombreContacto\n".
                   "Teléfono: $telefono\n".
                   "Email: $email\n\n".
                   "Mensaje:\n$mensaje\n";
        $headers = "From: no-reply@" . $_SERVER['SERVER_NAME'] . "\r\n" .
                   "Reply-To: " . $email . "\r\n";

        // Aquí puedes cambiar mail() por PHPMailer o similar
        @mail($to, $subject, $body, $headers);

        $success = true;
    }
} else {
    header('Location: /#contacto');
    exit;
}

require_once __DIR__ . '/../includes/header.php';
?>

<section class="section">
    <div class="container">
        <?php if (!empty($success)): ?>
            <h2>¡Gracias por tu mensaje!</h2>
            <p>He recibido tu solicitud de demo. Me pondré en contacto contigo lo antes posible.</p>
            <p><a href="/">Volver a la página principal</a></p>
        <?php else: ?>
            <h2>Ha habido algún problema con el formulario</h2>
            <?php if (!empty($errores)): ?>
                <ul class="error-list">
                    <?php foreach ($errores as $error): ?>
                        <li><?= htmlspecialchars($error) ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <p><a href="/#contacto">Volver al formulario</a></p>
        <?php endif; ?>
    </div>
</section>

<?php
require_once __DIR__ . '/../includes/footer.php';
