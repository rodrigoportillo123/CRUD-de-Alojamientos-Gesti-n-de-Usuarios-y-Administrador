<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Login Roodrix</title>
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="form_handler.php" method="POST">
                <h1>Creación de cuenta</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>Utiliza tu correo</span>
                <input type="text" name="name" placeholder="Nombre" required>
                <input type="email" name="email" placeholder="Correo" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <select name="role" required>
                    <option value="user">Usuario</option>
                    <option value="admin">Administrador</option>
                </select>
                <input type="hidden" name="action" value="register">
                <button type="submit">Registrarse</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="form_handler.php" method="POST">
                <h1>Iniciar sesión</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>Utiliza tu correo y contraseña</span>
                <input type="email" name="email" placeholder="Correo" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <input type="hidden" name="action" value="login">
                <button type="submit">Iniciar sesión</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Bienvenido</h1>
                    <p>Ingrese a su página personal</p>
                    <button class="hidden" id="login">Iniciar</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hola amigo</h1>
                    <p>Registrar con su usuario personal</p>
                    <button class="hidden" id="register">Inscribirse</button>
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
