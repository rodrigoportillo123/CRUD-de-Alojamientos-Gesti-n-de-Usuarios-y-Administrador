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
            width: 500px; /* Adjust width as needed */
            margin-top: 40px;
        }

        img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Encuentra tu alojamiento ideal</h1>
        <p>Descubre una amplia selección de apartamentos, casas y habitaciones en todo el mundo.</p>
        <button>Explorar</button>
    </div>

    <div class="image-container">
        <img src="images/hotel-image.jpg" alt="Hotel Image"> 
    </div>

</body>
</html>