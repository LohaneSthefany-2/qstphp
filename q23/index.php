<html>
<head>
<meta charset="UTF-8">
<title>Questão 19</title>
</head>
<body>

<form method="post">
<label>Nome:</label>
<input type="text" name="nome"><br><br>
<label>Sexo (M/F):</label>
<input type="text" name="sexo"><br><br>
<input type="submit" value="Enviar">

</form>

<?php
$homens = 0;
$mulheres = 0;
if(isset($_POST['nome'])){
$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
if($sexo == "M" || $sexo == "m"){
echo "$nome é homem <br>";
$homens++;
}else{
echo "$nome é mulher <br>";
$mulheres++;
}
echo "Homens: $homens <br>";
echo "Mulheres: $mulheres";
}
?>
</body>
</html>