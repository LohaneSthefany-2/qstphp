<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 15</title>
</head>
<body>
    <form method="post" action="">
        <label>número</label>
        <input type="number" name="número" required><br><br>
        <input type="submit" value="verificar">
    </form>
    <?php
        $numero = $_POST['número'];
        if ($numero > 100 && $numero <200) {
            echo "<h3>O número $numero está entre 100 e 200</h3>";
        } else {
            echo "<h3>O número $numero não está entre 100 e 200</h3>";
        }
    ?>
    
</body>
</html>