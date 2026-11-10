
<?php
$numeros = [];
for ($i = 0; $i < 50; $i++) {
    $numeros[] = rand(1, 1000);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Arreglos PHP</title>
</head>
<body>
    <h1>Arreglo de 50 números aleatorios</h1>
    <p>
        <?php
        echo implode(", ", $numeros);
        ?>
    </p>
</body>
</html>
