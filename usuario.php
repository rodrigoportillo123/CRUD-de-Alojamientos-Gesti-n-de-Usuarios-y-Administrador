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
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      height: 100vh;
      font-family: sans-serif;
    }

    .container {
      text-align: center;
      background-color: #fff;
      padding: 40px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    h1 {
      margin-bottom: 20px;
    }

    p {
      margin-bottom: 30px;
    }

    button {
      background-color: #4CAF50;
      color: white;
      padding: 15px 30px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: #3e8e41;
    }

    .image-container {
      display: flex; /* Utiliza flexbox para organizar las imágenes */
      flex-wrap: wrap; /* Permite que las imágenes se envuelvan en múltiples filas */
      justify-content: center; /* Centra las imágenes horizontalmente */
      margin-top: 40px;
    }

    .gallery-item {
      width: 300px; /* Ajusta el ancho de cada imagen */
      margin: 10px; /* Agrega margen entre las imágenes */
      text-align: center;
    }

    .gallery-image {
      width: 100%; 
      height: 200px; /* Ajusta la altura de las imágenes */
      object-fit: cover; 
      border-radius: 5px;
    }
  </style>
</head>
<body>
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
      <a href="formulario.php">
      <button >Explorar</button>
      </a>
    </div>
    
  </div>

  
  </div>
</body>
</html>