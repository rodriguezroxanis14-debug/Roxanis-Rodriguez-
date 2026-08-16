<?php
// Ruta del archivo
$archivo = "ad22.php";

// Abrir el archivo en modo apéndice ('a') - añade texto al final sin sobrescribir
$gestor = fopen($archivo, "a");

// Verificar si el archivo se abrió correctamente
if ($gestor) {
    // Texto a añadir al archivo
    $texto = "Lista de Numeros Pares, rango de 1 hasta 30\n";
    // Añadir el texto al archivo
    fwrite($gestor, $texto);

    // Cerrar el archivo
    fclose($gestor);

    echo "El texto ha sido añadido correctamente.";
} else {
    echo "No se pudo abrir el archivo.";
}
?>
