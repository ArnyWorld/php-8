<?php include 'includes/header.php';
                              
// While

$i = 0; // Inicializador

while($i < 10) {

    echo $i . "<br>";

    $i++; // Incremento
}

echo "<br>";

// Do While
$i = 100;

do {
    echo $i . "<br>";

    $i++;
} while($i < 10);


// For Each
$clientes = array('Juan', 'Arni', 'Carla');

foreach( $clientes as $cliente ):
    echo $cliente . '<br/>';
endforeach;

$cliente = [
    'nombre' => 'Arni',
    'saldo' => 200,
    'tipo' => 'Premium'
];

foreach( $cliente as $key => $valor ):
    echo $key . " - " . $valor . '<br/>';
endforeach;



include 'includes/footer.php';