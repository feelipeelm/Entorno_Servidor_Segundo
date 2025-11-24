<?php
session_start();

echo "<h2>Resumen de tu compra:</h2>";

// Mostrar camisetas
echo "<h3>Camisetas:</h3>";
if(!empty($_SESSION['camisetas'])) {
    foreach($_SESSION['camisetas'] as $item => $v) {
        echo "$item (Cantidad: {$_SESSION['Cantidad_Tshirts'][$item]})<br>";
    }
} else {
    echo "No ha seleccionado ninguna camiseta.<br>";
}
// Mostrar jumpers
echo "<h3>Sudaderas:</h3>";
if(!empty($_SESSION['jumpers'])) {
    foreach($_SESSION['jumpers'] as $item => $v) {
        echo "$item (Cantidad: {$_SESSION['Cantidad_Jumpers'][$item]})<br>";
    }
} else {
    echo "No ha seleccionado ninguna sudadera.<br>";
}

// Mostrar jeans
echo "<h3>Vaqueros:</h3>";
if(!empty($_SESSION['jeans'])) {
    foreach($_SESSION['jeans'] as $item => $v) {
        echo "$item (Cantidad: {$_SESSION['Cantidad_Jeans'][$item]})<br>";
    }
} else {
    echo "No ha seleccionado ningún vaquero.<br>";
}

// Botones para volver y modificar selección
echo "<br><a href='camisetas2.php'>Modificar Camisetas</a><br>";
echo "<br><a href='jumpers2.php'>Modificar Sudaderas</a><br>";
echo "<br><a href='jeans2.php'>Modificar Vaqueros</a><br>";
?>
