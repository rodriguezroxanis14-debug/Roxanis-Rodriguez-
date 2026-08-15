<?php
// Obtener la ruta absoluta del archivo
$archivo = __DIR__ . "/pfinal3.php";
// Abrir y leer el archivo
if (file_exists($archivo)) {
    $gestor = fopen($archivo, "r");
    $contenido = fread($gestor, filesize($archivo));
    echo $contenido;
    fclose($gestor);
} else {
    echo "El archivo no existe.";
}
?>
