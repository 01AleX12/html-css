<?php

// Verificar si se han enviado datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger y limpiar los datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $fecha_nacimiento = htmlspecialchars($_POST['fecha_nacimiento']);
    $genero = htmlspecialchars($_POST['genero']);
    $direccion = htmlspecialchars($_POST['direccion']);
    $plan = htmlspecialchars($_POST['plan']);
    $frecuencia_pago = htmlspecialchars($_POST['frecuencia_pago']);
    $idioma = htmlspecialchars($_POST['idioma']);
    $intereses = isset($_POST['intereses']) ? $_POST['intereses'] : [];
    $terminos = isset($_POST['terminos']) ? 'Aceptado' : 'No aceptado';

    // Mostrar los resultados
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultados de la Suscripción</title>
        <link rel="stylesheet" href="php.css">

    </head>
    <body>

    <h1>RESULTADOS DE LA SUSCRIPCIÓN</h1>

    <div class="result">
        <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Teléfono:</strong> <?php echo $telefono; ?></p>
        <p><strong>Fecha de Nacimiento:</strong> <?php echo $fecha_nacimiento; ?></p>
        <p><strong>Género:</strong> <?php echo $genero; ?></p>
        <p><strong>Dirección:</strong> <?php echo $direccion; ?></p>
        <p><strong>Plan:</strong> <?php echo $plan; ?></p>
        <p><strong>Frecuencia de Pago:</strong> <?php echo $frecuencia_pago; ?></p>
        <p><strong>Idioma:</strong> <?php echo $idioma; ?></p>
        <p><strong>Intereses:</strong> <?php echo implode(", ", $intereses); ?></p>
        <p><strong>Términos:</strong> <?php echo $terminos; ?></p>
    </div>

    <a class="button" href="formulario.html">REGRESAR AL FORMULARIO</a>

    </body>
    </html>
    <?php
} else {
    // Redirigir a formulario si no se envían datos
    header("Location: formulario.html");
    exit();
}
?>