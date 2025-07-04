<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css">
    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <!-- Estilos Personalizados -->
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Login / Registro</title>
</head>
<body class="body-login">
    <!-- Mostramos mensajes -->
    <?php if (isset($error)): ?>
        <div class="alert"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <?php if (isset($mensaje)): ?>
        <div class="alert success"><?= htmlspecialchars($mensaje) ?></div>
    <?php endif; ?>

    <div class="">
        <a href="index.php" class="icono"><i class="ri-arrow-left-s-line"></i><span>Volver</span></a>
    </div>

    <div class="container" id="container">
        <!-- REGISTRO -->
        <div class="form-container sign-up">
            <form action="index.php?ruta=login" method="POST">
                <h1>Crear Cuenta</h1>
                <input type="text" name="nombre" placeholder="Nombre" required>
                <input type="email" name="correo" placeholder="Correo Electrónico" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <input type="password" name="confirm_password" placeholder="Confirmar contraseña" required>
                <button type="submit" name="registro">Crear Cuenta</button>
            </form>
        </div>

        <!-- LOGIN -->
        <div class="form-container sign-in">
            <form action="index.php?ruta=login" method="POST">
                <h1>Iniciar Sesión</h1>
                <input type="email" name="correo" placeholder="Correo" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <a href="index.php?ruta=recovery">¿Olvidaste tu contraseña?</a>
                <button type="submit" name="login">Iniciar Sesión</button>
                <span>o continuar con</span>
                <!-- Google Sign-In -->
                <div id="g_id_signin" data-type="icon"></div>
            </form>
        </div>

        <!-- ANIMACIÓN ENTRE LOGIN Y REGISTRO -->
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Bienvenido, Amigo!</h1>
                    <p>Introduzca sus datos personales para utilizar todas las funciones del sitio</p>
                    <button class="hidden" id="login">Iniciar Sesión</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hola, Amigo!</h1>
                    <p>Regístrese con datos personales para utilizar todas las funciones del sitio.</p>
                    <button class="hidden" id="register">Crear Cuenta</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Seccion para los scripts.js -->
    <script src="assets/js/auth/login.js"></script>

</body>
</html>
