<html>
<head>
<meta charset="UTF-8">
<title>Questão 28</title>
</head>
<body>

<form method="post">
<label>Nome do funcionário:</label>
<input type="text" name="nome"><br><br>
<label>Salário:</label>
<input type="number" name="salario"><br><br>
<label>Valor do salário mínimo:</label>
<input type="number" name="minimo"><br><br>
<input type="submit" value="Calcular">
</form>

<?php
$aumentoTotal = 0;
if(isset($_POST['nome'])){
$nome = $_POST['nome'];
$salario = $_POST['salario'];
$minimo = $_POST['minimo'];
for($i=1; $i<=584; $i++){

if($salario < ($minimo * 3)){
$reajuste = $salario * 0.50;
}
elseif($salario >= ($minimo * 3) && $salario <= ($minimo * 10)){
$reajuste = $salario * 0.20;
}
elseif($salario > ($minimo * 10) && $salario <= ($minimo * 20)){
$reajuste = $salario * 0.15;
}
else{
$reajuste = $salario * 0.10;
}
$novoSalario = $salario + $reajuste;
$aumentoTotal = $aumentoTotal + $reajuste;
}
echo "Funcionário: $nome <br>";
echo "Reajuste: $reajuste <br>";
echo "Novo salário: $novoSalario <br>";
echo "Aumento na folha de pagamento: $aumentoTotal";
}
?>
</body>
</html>