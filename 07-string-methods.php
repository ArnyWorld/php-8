<?php include 'includes/header.php';

$nombreCliente = "Arni Pablo";

// Conocer extension de un string
echo strlen($nombreCliente);
var_dump($nombreCliente);

// Eliminar espacios en blanco
$texto = trim($nombreCliente);
echo strlen($texto);

//Convertir a mayusculas
echo strtoupper($nombreCliente);

// Convertir en minusculas
echo strtolower($nombreCliente);

$mail1 = "Arni@correo.com";
$mail2 = "arnold@correo.com";

var_dump(strtolower($mail1) === strtolower($mail2));
echo str_replace('Arni', 'A', $nombreCliente);

// Revisar si un string existe o no
echo strpos($nombreCliente, 'Juan');

$tipoCliente = "Premium";

echo "<br>";

echo "El Cliente " . $nombreCliente . " es " . $tipoCliente;

echo "El Cliente {$nombreCliente} es ${tipoCliente} ";

include 'includes/footer.php';