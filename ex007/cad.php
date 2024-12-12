<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Conversor de Moedas v1.0</h1>
    </header>
    <main>
        <?php 
            $number = $_GET["numero"];
            echo "Seus R$ $number equivalem a US$" .number_format ($number / 5.22, 2);
        ?>

        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
    
</body>
</html>