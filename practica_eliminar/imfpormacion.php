<?php
echo "Último acceso: " . date("F d Y H:i:s.", fileatime("funcionusuario.php")) . "<br>";
echo "Última modificación: " . date("F d Y H:i:s.", filemtime("funcionusuario.php")) . "<br>";
echo "Tamaño del archivo: " . filesize("funcionusuario.php") . " bytes";
?>
