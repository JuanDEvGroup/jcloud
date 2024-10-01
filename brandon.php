<?php

session_start();

if (empty($_SESSION["correo"])) {
   
    header("Location: index.html");
    
    exit();
}
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido Brandon</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
        /* Estilos Fluent y Material Design */
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 400px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        .title {
            font-size: 24px;
            font-weight: 500;
            margin-bottom: 20px;
        }
        .button {
            background-color: #2196f3;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 10px;
        }
        .button:hover {
            background-color: #1976d2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="title">Bienvenido Hermano Brandon a tu archivo en la nube del servidor</h2>
        <button class="button" onclick="downloadFile('Iglesias-en-la-edad-media.pptm', 'Iglesias-en-la-edad-media.pptm')">Descargar archivo: Diapositivas en al nube.</button>
    </div>
    <script>
        function downloadFile(url, filename) {
            var link = document.createElement('a');
            link.href = url;
            link.download = filename;
            link.click();
        }
    </script>
    </div>
</body>
</html>