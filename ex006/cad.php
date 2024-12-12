"<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            echo "<h1>Trabalhando com números aleatórios</h1>";
            echo "<p>Gerando um número aleatório entre 1 e 100...</p>";
            $num = random_int(1, 100);
            echo "<p>O valor gerado foi <strong>$num</strong><p>"
        ?>

        <form method="get">
            <input type="submit" value="🔃 Gerar Outro">
        </form>

         
    </main>
    
</body>
</html>