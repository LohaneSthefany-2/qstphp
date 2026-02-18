<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 5</title>
</head>
<body>
    <form method="post" action="">
        <label>nome do aluno</label>
        <input type="text" name="nome" required><br><br>
        <label>1 nota:</label>
        <input type="number" name="num1" required><br><br>
        <label>2 nota:</label>
        <input type="number" name="num2" required><br><br>
        <label>3 nota:</label>
        <input type="number" name="num3" required><br><br>
        <input type="submit" name="resultado" value="resultado">
    </form>
    <?php
        $nome = $_POST['nome'];
        $primeiranota = $_POST['num1'];
        $segundanota = $_POST['num2'];
        $terceiranota = $_POST['num3'];
        $soma = $primeiranota + $segundanota + $terceiranota;
        $media = $soma / 3;
        echo "<h3>a média do aluno $nome é $media;<h3>";

    ?>
    
</body>
</html>