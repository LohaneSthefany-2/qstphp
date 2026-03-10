<html>
<head>
<meta charset="UTF-8">
<title>Questão 20</title>
</head>
<body>

<form method="post">
<label>Valor do carro:</label>
<input type="number" name="valor"><br><br>
<label>Ano:</label>
<input type="number" name="ano"><br><br>
<input type="submit" value="Calcular">

</form>

<?php
if(isset($_POST['valor'])){
$valor = $_POST['valor'];
$ano = $_POST['ano'];
if($ano <= 2000){
$desconto = $valor * 0.12;
}else{
$desconto = $valor * 0.07;
}
$valorFinal = $valor - $desconto;
echo "Desconto: $desconto <br>";
echo "Valor final: $valorFinal";
}
?>
</body>
</html>