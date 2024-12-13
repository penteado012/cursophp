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
        <h1>Resultado Final</h1>
    </header>
    <main>
        <?php 
            $numero = $_GET["numero"] ?? "Sem numero"; 
            $antecessor = $numero - 1; 
            $sucessor = $numero + 1;
            echo "O número escolhido foi <strong>$numero</strong> <br>";
            echo "O seu antecessor é $antecessor <br>";
            echo "O seu sucessor é $sucessor";
        ?>

        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </main>
    
</body>
</html>