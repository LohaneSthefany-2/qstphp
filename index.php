<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 12</title>
</head>
<body>
    <form method="post" action="">
        <label>custo de fábrica:</label>
        <input type="number" name="num" required><br><br>
    </form>
    <?php
        $custo = $_POST['num'];
        $imposto = $custo * (45/100);
        $resultado = $custo + $imposto;
        $distribuidor = $resultado * (28/100);
        $preco = $resultado + $distribuidor;
        echo "O custo de fábrica é: $custo <br>";
    ?>
    
</body>
</html>