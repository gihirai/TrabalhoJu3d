<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Ex1</title>
</head>
<body>
    <div>
        <h1>Mês correspondente:</h1>
        <?php
        $numero = $_POST["numero"];
        switch ($numero) {
            case 1: echo "O valor corresponde a janeiro"; return;
            case 2: echo "O valor corresponde a fevereiro"; return;
            case 3: echo "O valor corresponde a março"; return;
            case 4: echo "O valor corresponde a abril"; return;
            case 5: echo "O valor corresponde a maio"; return;
            case 6: echo "O valor corresponde a junho"; return;
            case 7: echo "O valor corresponde a julho"; return;
            case 8: echo "O valor corresponde a agosto"; return;
            case 9: echo "O valor corresponde a setembro"; return;
            case 10: echo "O valor corresponde a outubro"; return;
            case 11: echo "O valor corresponde a novembro"; return;
            case 12: echo "O valor corresponde a dezembro"; return;
            default: echo "Não existe mês correspondente a esse número"; return;
        }
        ?>
    </div>
</body>
</html>