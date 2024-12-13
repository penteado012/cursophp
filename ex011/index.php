<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="style.css">    
</head>
<body>
    <?php 
        $num1 = $_GET['v1'] ??0 ;
        $num2 = $_GET['v2'] ??0;
    ?>
    <main>
        <h1>Somador de Valores</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?= $num2?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?= $num1?>">
            <input type="submit" value="Somar">
        </form>
    </main>
    <section id="Resultado">
        <h2>Resultado da Soma</h2>
        <?php 
            $soma = $num1 + $num2;
            echo "<p>A soma dos valores é $soma</p>";
        ?>
    </section>
</body>
</html>