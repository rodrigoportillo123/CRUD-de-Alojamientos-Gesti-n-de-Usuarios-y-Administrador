<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alojamiento - Landing Page</title>
  <style>
    body {
      background-color: #c9d6ff;
      background: linear-gradient(to right, #e2e2e2, #c9d6ff);
      font-family: sans-serif;
      margin: 0;
    }

    nav {
      background-color: #4CAF50;
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
      text-align: center;
      background-color: #fff;
      padding: 40px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      margin: 20px auto;
      width: 90%;
      max-width: 1200px;
    }

    h1 {
      margin-bottom: 20px;
    }

    .image-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      margin-top: 40px;
    }

    .gallery-item {
      width: 300px;
      margin: 10px;
      text-align: center;
    }

    .gallery-image {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-radius: 5px;
    }

    button {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 10px;
    }

    button:hover {
      background-color: #3e8e41;
    }
  </style>
</head>
<body>
  <nav>
    <div>Alojamiento</div>
    <div>
      <a href="mis_alojamientos.php">Mis Alojamientos</a>
      <a href="formulario.php">Reservar</a>
    </div>
  </nav>

  <div class="container">
    <h1>Encuentra tu alojamiento ideal</h1>
    <p>Descubre una amplia selección de apartamentos, casas y habitaciones en todo el mundo.</p>

    <div class="image-container">
      <div class="gallery-item">
        <img class="gallery-image" src="https://blog.homedepot.com.mx/wp-content/uploads/2023/07/cuarto-organizado-1-1024x558.jpeg" alt="Imagen 1">
        <p>Habitación Deluxe</p>
      </div>
      <div class="gallery-item">
        <img class="gallery-image" src="https://blog.homedepot.com.mx/wp-content/uploads/2023/07/cuarto-organizado-1-1024x558.jpeg" alt="Imagen 2">
        <p>Suite Presidencial</p>
      </div>
      <div class="gallery-item">
        <img class="gallery-image" src="https://blog.homedepot.com.mx/wp-content/uploads/2023/07/cuarto-organizado-1-1024x558.jpeg" alt="Imagen 3">
        <p>Vista al Mar</p>
      </div>
    </div>
  </div>
</body>
</html>
