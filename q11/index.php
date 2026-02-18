<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 11</title>
</head>
<body>
    <form method="post" action="">
        <label>preço do produto:</label>
        <input type="number" name="preco" required><br><br>
        <label>acréscimo:</label>
        <input type="number" name="acrescimo" required><br><br>
    </form>
    <?php
        $preço = $_POST['preco'];
        $acréscimo = $_POST['acrescimo'];
        $calculo = $preço * ($acréscimo / 100);
        $valorfinal = $preço + $calculo;
        echo "O preço do produto é: $valorfinal <br>";
    ?>
</body>
</html>