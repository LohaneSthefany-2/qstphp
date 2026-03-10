<html>
<head>
<meta charset="UTF-8">
<title>Questão 21</title>
</head>
<body>

<form method="post">
<label>Nome:</label>
<input type="text" name="nome"><br><br>
<label>Sexo:</label>
<input type="text" name="sexo"><br><br>
<label>Idade:</label>
<input type="number" name="idade"><br><br>
<label>Saúde (boa/ruim):</label>
<input type="text" name="saude"><br><br>
<input type="submit" value="Verificar">
</form>

<?php
if(isset($_POST['nome'])){
$sexo = $_POST['sexo'];
$idade = $_POST['idade'];
$saude = $_POST['saude'];
if($sexo == "M" && $idade >= 18 && $saude == "boa"){
echo "Apto para serviço militar";
}else{
echo "Não apto";
}
}
?>
</body>
</html>