<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 4</title>
</head>
<body>
    <form method="post" action="">
        <label>nome do vendedor</label>
        <input type="text" name="vendedor" required><br><br>
        <label>salário do vendedor</label>
        <input type="number" name="salário" required><br><br>
        <label>total de vendas</label>
        <input type="number" name="vendas" required><br><br>
        <input type="submit" value="Calcular">
    </form>
    <?php
        $nome = $_POST['vendedor'];
        $salário = $_POST['salário'];
        $vendas = $_POST['vendas'];
        $comissão = $vendas * 0.15;
        $total = $salário + $comissão;
        echo "<h3>O nome do vendendor: $nome<h3>";
        echo "<h3>O salário do vendedor: $salário<h3>";
        echo "<h3>O total de vendas do vendedor: $vendas<h3>";
        echo "<h3>O salário total do vendedor: $total<h3>";

    ?>
    
</body>
</html>