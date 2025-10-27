<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $string = "   Texto de prueba para el ejercicio 2   ";
    $string_trim = trim($string, " ");
    print_r($string_trim);
    echo "<br>";
    $countChars = count_chars($string, 1);
    print_r($countChars);
    echo "<br>";
    echo "<br>";
    $maximo =max($countChars);
    echo $maximo;
    echo "<br>";
    $most_char_used = array_search($maximo, $countChars);
    print_r($most_char_used);
    echo "<br>";
    $caracter_normal = chr($most_char_used);
    echo "<br>";
    $new_string = str_replace($caracter_normal, "", $string);
    print_r($new_string);

    ?>
</body>
</html>