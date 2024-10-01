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
    <title>Bienvenido a Juan Cloud</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <style type="text/css"></style><!--Aquí tu estilo-->
    <!--Esilos de titulo de pagina, no cambiarlos--> <style> 
    .logout-btn {
  background-color: #fff;
  border: none;
  border-radius: 4px;
  color: #333;
  cursor: pointer;
  font-size: 16px;
  font-weight: 500;
  padding: 8px 16px;
  transition: background-color 0.2s ease;
}

.logout-btn:hover {
  background-color: #f7f7f7;
}

.logout-btn i {
  margin-right: 8px;
}
        header {
  background-color: #f0f0f0;
  padding: 20px;
  text-align: center;
  border-bottom: 1px solid #ccc;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

h1 {
  font-size: 24px;
  font-weight: 600;
  color: #333;
  margin: 0;
}

h1::before {
  content: "";
  display: block;
  width: 40px;
  height: 4px;
  background-color: #337ab7;
  margin: 10px auto;
  border-radius: 2px;
}
</style>
</head>
<body>
    <header>
        <nav>
        <button class="logout-btn" onclick="LogOut()">
  <i class="fa-solid fa-right-from-bracket"></i>
  Cerrar Sesión
</button>
        
            <ul>
                
     <header>  <!--Este es el titulo, no elimines esto--> 
  <h1><span >Bienvenido a Juan Cloud</span></h1> <!--Pon tu titulo--> 
  <?php
  echo "<br>Bienvenido usuario: <strong>" . $_SESSION["correo"] . "</strong>";
?>
</header>
            </ul>
        </nav>
    </header>
    <main>
       <section id="pagina1">
        <h1>
    <a href="receta-pan.php">Receta Pan</a>
</h1>
</section>
<section id="pagina2">
   <h1><a href="principios.php">Principios de Mateo</a></h1>
</section>
<section id="pagina3">
   <h1><a href="dashboard.php">Inicio</a></h1>
</section>
    </main>
    <script src="index.js"></script>
    <script>
    function LogOut(){
        window.location="logout.php"
    }
    </script>
</body>
</html>



