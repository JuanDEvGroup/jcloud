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
    <title>Principios de Mateo | Juan Cloud</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="icon" type="image/x-icon" href="book.png">
    <style>
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
<header>
  <h1><span style="background-color: rgb(163, 143, 132);"> Receta de pan de avena: Para 3 panes</span></h1>
</header>


<p style="text-align: center;">
	<br>
</p>

<ul>
	<li>3 (1/4) de avena molida</li>
	<li>2 huevos</li>
	<li>3 cdas. yogurt griego (K&eacute;fir)</li>
	<li>1 cdta. de polvo de hornear</li>
	<li>1/4 de bicarbonato</li>
	<li>3 cdtas. de ch&iacute;a</li>
	<li>Un poquito de sal preparada</li>
	<li>Un chorrito de Aceite Virgen de Oliva</li>
</ul>
<hr><pre data-empty="true">* Decorar con semilas de ajonjol&iacute;.</pre>
<hr>

<a href="receta-pan.pdf" download>
  <button class="descarga-btn">
    <i class="fas fa-download"></i>
    Descargar en PDF
  </button>
</a>s

<!-- Botón de copiar -->
<button class="copiar-btn" data-clipboard-text="Receta de pan de avena: Para 3 panes

3 (1/4) de avena molida
2 huevos
3 cdas. yogurt griego (Kefir)
1 cdta. de polvo de hornear
1/4 de bicarbonato
3 cdtas. de chia
Un poquito de sal preparada
Un chorrito de Aceite Virgen de Oliva
* Decorar con semilas de ajonjoli.">
  <i class="fas fa-copy"></i>
  Copiar
</button>

<!-- Agregamos la CDN de Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

<style>
  .descarga-btn {
    background-color: #4CAF50;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
  }

  .descarga-btn:hover {
    background-color: #3e8e41;
  }

  .descarga-btn i {
    margin-right: 10px;
  }

  .copiar-btn {
    background-color: #337ab7;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
  }

  .copiar-btn:hover {
    background-color: #23527c;
  }

  .copiar-btn i {
    margin-right: 10px;
  }
</style>

<!-- Agregamos la biblioteca ClipboardJS para copiar texto -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.6/clipboard.min.js"></script>

<script>
  // Creamos una instancia de ClipboardJS
  var clipboard = new ClipboardJS('.copiar-btn');

  // Agregamos un evento para cuando se hace clic en el botón de copiar
  clipboard.on('success', function(e) {
    console.log('Texto copiado!');
  });

  clipboard.on('error', function(e) {
    console.log('Error al copiar texto');
  });
</script>

<hr>

<p><span style="background-color: rgb(40, 50, 78); color: rgb(255, 255, 255);">Hecho por Juan Cloud Server- Por Juan Andr&eacute;s</span></p>
<hr>
