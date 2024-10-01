<?php
# Nota: no estamos haciendo validaciones
$correo = $_POST["correo"];
$palabra_secreta = $_POST["palabra_secreta"];
$palabra_secreta_confirmar = $_POST["palabra_secreta_confirmar"];

# Si no coinciden ambas contraseñas, lo indicamos y salimos
if ($palabra_secreta !== $palabra_secreta_confirmar) {
    echo "Las contraseñas no coinciden, intente de nuevo";
    exit;
}

# Incluimos las funciones, mira funciones.php para una mejor idea
include_once "funciones.php";

# Primero debemos saber si existe o no
$existe = usuarioExiste($correo);
if ($existe) {
    echo "Ya existe alguien registrado con ese nombre de Usuario";

    exit; 
}

# Si no existe, se ejecuta esta parte
# Ahora intentamos registrarlo
$registradoCorrectamente = registrarUsuario($correo, $palabra_secreta);
if ($registradoCorrectamente) {
    echo "<span>Registrado! Vuelve a Iniciar Sesión.</span>";
} else {
    echo "Error: Intenta más tarde.";
   
}
