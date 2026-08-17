<?php
// Ruta del archivo a eliminar
$archivo = "g1.php";

// Eliminar el archivo
if (unlink($archivo)) {
    echo "El archivo ha sido eliminado correctamente.";
} else {
    echo "No se pudo eliminar el archivo.";
}
?>
