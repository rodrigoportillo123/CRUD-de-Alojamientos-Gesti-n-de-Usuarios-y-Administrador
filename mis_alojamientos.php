<?php
// Conexión a la base de datos
include 'db.php';

// Consulta para obtener los registros
$sql = "SELECT * FROM reserva";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mis Alojamientos</title>
  <style>
    body {
      background-color: #c9d6ff;
      background: linear-gradient(to right, #e2e2e2, #c9d6ff);
      font-family: sans-serif;
      margin: 0;
    }

    nav {
      background-color:rgb(70, 50, 109);
      padding: 10px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      color: white;
    }

    nav a {
      color: white;
      text-decoration: none;
      margin-right: 20px;
      font-weight: bold;
    }

    .container {
      background-color: #fff;
      padding: 40px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      margin: 20px auto;
      max-width: 1200px;
    }

    h1 {
      text-align: center;
      color: #333;
      margin-bottom: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin: 20px 0;
      background-color: #fff;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    th, td {
      padding: 15px;
      border: 1px solid #ddd;
      text-align: center;
    }

    th {
      background-color:rgb(87, 70, 185);
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    tr:hover {
      background-color: #ddd;
    }

    .btn-back {
      display: inline-block;
      background-color:rgb(79, 105, 209);
      color: white;
      padding: 10px 20px;
      border-radius: 5px;
      text-decoration: none;
      margin-top: 20px;
      text-align: center;
    }

    .btn-back:hover {
      background-color: #3e8e41;
    }
  </style>
</head>
<body>
  <nav>
    <div>Alojamiento</div>
    <div>
      <a href="index.php">Inicio</a>
      <a href="formulario.php">Reservar</a>
    </div>
  </nav>

  <div class="container">
    <h1>Mis Alojamientos</h1>

    <table>
      <tr>
        
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
        <th>Teléfono</th>
      </tr>
      <?php
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              echo "<tr>
                    
                      <td>{$row['name']}</td>
                      <td>{$row['apellido']}</td>
                      <td>{$row['email']}</td>
                      <td>{$row['telefono']}</td>
                    </tr>";
          }
      } else {
          echo "<tr><td colspan='5'>No hay registros.</td></tr>";
      }
      ?>
    </table>

    <a href="index.php" class="btn-back">Volver a Inicio</a>
  </div>
</body>
</html>
