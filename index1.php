<?php

    //Ejercicio N° 1
    // a) Almacenar en un array los 10 primeros números pares y mostrarlos en pantalla uno debajo del otro.

$pares = array();
for ($i = 2; $i <= 20; $i += 2) { /* iniciando en 2 y sumando de dos en dos hasta llegar a 20 (maximo) */
    $pares[] = $i;
}

/* muestro los pares en dicho intervalo */
echo "a) Los 10 primeros números pares:<br>";

foreach ($pares as $numero) {
    echo $numero . "<br>";
}

    // b) Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1. Mostrar el esquema del array con print_r().

$datos = array("Pedro", "Ana", 34, 1);

echo "b) Contenido \$datos:<br>";
print_r($datos);


    // c) Crear un array asociativo e introducir los siguientes valores: Nombre: Pedro, Apellido: Torres, Dirección: Av. Mayo 3703, Teléfono: 1122334455.
$informacion = array(
    "Nombre" => "Pedro",
    "Apellido" => "Torres",
    "Dirección" => "Av. Mayo 3703",
    "Teléfono" => 1122334455
);
echo "<br><br>c) Información personal:<br>";
foreach ($informacion as $clave => $valor) {
    echo $clave . ": " . $valor . "<br>";
}


    // d) Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y Chicago. Mostrar el contenido del array con la estructura requerida.
$ciudades = array("Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago");
echo "<br>d) Ciudades:<br>";
foreach ($ciudades as $indice => $ciudad) {
    echo "La ciudad con el índice " . $indice . " tiene el nombre " . $ciudad . "<br>";
}


    // e) Repite el ejercicio anterior pero ahora con un array asociativo con los índices MD para el valor Madrid, BCL para Barcelona, LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago. Mostrarlo de la siguiente manera: "El índice de Madrid es MD".
$ciudades_asociativo = array(
    array("MD", "Madrid"),
    array("BCL", "Barcelona"),
    array("LD", "Londres"),
    array("NY", "New York"),
    array("LA", "Los Ángeles"),
    array("CCG", "Chicago")
);

echo "<br>e) Ciudades asociativas:<br>";
foreach ($ciudades_asociativo as $ciudad) {
    $indice = $ciudad[0]; /* indico el primer elemento del array */
    $nombre = $ciudad[1];/* indico el segundo elemento del array */
    echo "El índice de " . $nombre . " es " . $indice . "<br>";
}














?>