<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Questão 20</title>
</head>
<body>
<form method="post">
    Valor do carro:<br>
    <input type="number" name="valor" step="0.01" required><br><br>
    Ano do carro:<br>
    <input type="number" name="ano" required><br><br>
    <input type="hidden" name="totalAte2000" value="<?php echo isset($_POST['totalAte2000']) ? $_POST['totalAte2000'] : 0; ?>">
    <input type="hidden" name="totalGeral" value="<?php echo isset($_POST['totalGeral']) ? $_POST['totalGeral'] : 0; ?>">
    <input type="submit" name="continuar" value="Calcular e Continuar">
    <input type="submit" name="parar" value="N - Não">
</form>
<br><hr><br>
<?php
if ($_POST) {
    $totalAte2000 = $_POST['totalAte2000'];
    $totalGeral = $_POST['totalGeral'];
    if (isset($_POST['continuar'])) {
        $valor = $_POST['valor'];
        $ano = $_POST['ano'];

        if ($ano <= 2000) {
            $desconto = $valor * 0.12;
            $totalAte2000++;
        } else {
            $desconto = $valor * 0.07;
        }
        $valorFinal = $valor - $desconto;
        $totalGeral++;
        echo "Desconto: R$ $desconto <br>";
        echo "Valor a pagar: R$ $valorFinal <br>";
    }
    if (isset($_POST['parar'])) {
        echo "<h3>Total de carros até 2000: $totalAte2000</h3>";
        echo "<h3>Total geral de carros: $totalGeral</h3>";
    }
}
?>
</body>
</html>
