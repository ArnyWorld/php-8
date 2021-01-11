<?php 
declare(strict_types=1);
include 'includes/header.php';
//:?string    Puede o no retornar una cadena
//:void Puede retornar null o no puede retornar nada
//:string|int   Puede retornar string o entero
function usuarioAutenticado(bool $autenticado) : ?string {
    if($autenticado) {
        return "El Usuario esta autenticado";
    } else {
        return null;
    }
}

$usuario = usuarioAutenticado(false);
echo $usuario;

include 'includes/footer.php';