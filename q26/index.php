<html>
<head>
<meta charset="UTF-8">
<title>Questão 22</title>
</head>
<body>

<form method="post">
<label>Preço de custo:</label>
<input type="number" name="custo"><br><br>
<label>Preço de venda:</label>
<input type="number" name="venda"><br><br>
<input type="submit" value="Verificar">
</form>

<?php
if(isset($_POST['custo'])){
$custo = $_POST['custo'];
$venda = $_POST['venda'];
if($venda > $custo){
echo "Lucro";
}elseif($venda < $custo){
echo "Prejuízo";
}else{
echo "Empate";
}
}
?>
</body>
</html>