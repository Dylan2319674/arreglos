
<?php
session_start();

if (!isset($_SESSION['numeros'])) {
    $_SESSION['numeros'] = [];

    for ($i = 0; $i < 50; $i++) {
        $_SESSION['numeros'][] = rand(1, 1000);
    }
}
$numeros = $_SESSION['numeros'];
$mayores = [];
if (isset($_POST['mostrar'])) {
    $ordenados = $numeros;
    rsort($ordenados);
    $mayores = array_slice($ordenados, 0, 3);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Arreglos PHP</title>

    <style>
        body {
            font-family: Arial;
            background: #eeeeee;
            text-align: center;
            padding: 40px;
        }

        .contenedor {
            background: white;
            padding: 30px;
            border-radius: 12px;
            max-width: 850px;
            margin: auto;
        }

        button {
            background: #1769aa;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background: #104c80;
        }

        .resultado {
            color: green;
            font-size: 22px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="contenedor">
    <h1>Arreglo de 50 números aleatorios</h1>
    <h3>Números generados:</h3>
    <p>
        <?php echo implode(", ", $numeros); ?>
    </p>
    <form method="POST">
        <button type="submit" name="mostrar">
            Mostrar los 3 números más grandes
        </button>
    </form>
    <?php if (!empty($mayores)): ?>
        <h2>Los 3 números más grandes son:</h2>
        <p class="resultado">
            <?php echo implode(", ", $mayores); ?>
        </p>
    <?php endif; ?>
</div>
</body>
</html>
