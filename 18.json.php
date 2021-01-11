<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Tablet', 
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Televisión 24"', 
        'precio' => 300,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor Curvo', 
        'precio' => 400,
        'disponible' => false
    ]
];

echo "<pre>";
var_dump($productos);
//JSON_ENCODE  permite convertir un array a formato json()
$json = json_encode($productos, JSON_UNESCAPED_UNICODE);
//JSON_DECODE  permite convertir un json a array
$json_array = json_decode($json);

var_dump($json);
var_dump($json_array);
echo "</pre>";




include 'includes/footer.php';