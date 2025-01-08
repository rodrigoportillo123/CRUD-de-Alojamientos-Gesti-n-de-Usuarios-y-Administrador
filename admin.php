<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <link rel="stylesheet" href="./css/mainadmin.css"> </head>
<body>
    <div class="container">
        <h1>Panel de Administración</h1>
        <nav>
            <ul>
                <li><a href="#">Usuarios</a></li>
                <li><a href="#">Reservas</a></li>
                <li><a href="#">Propiedades</a></li>
                <li><a href="#">Reportes</a></li>
            </ul>
        </nav>

        <div class="content">
            <h2>Usuarios</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Rol</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Juan Pérez</td>
                        <td>juan@example.com</td>
                        <td>admin</td>
                        <td><a href="#">Editar</a> | <a href="#">Eliminar</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="script.js"></script> </body>
</html>