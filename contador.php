<?php
$archivo = "contador.txt";

if (!file_exists($archivo)) {
    file_put_contents($archivo, "0");
}

$visitas = (int) file_get_contents($archivo);
$visitas++;
file_put_contents($archivo, $visitas);

echo $visitas;
?>