<?php
include('conexao.php');

$nome = $_GET['nome'];
$rg = $_GET['rg'];
$cpf = $_GET['cpf'];
$cep = $_GET['cep'];
$rua = $_GET['rua'];
$numero = $_GET['numero'];
$bairro = $_GET['bairro'];
$cidade = $_GET['cidade'];
$uf = $_GET['uf'];
$email = $_GET['email'];


$conexao->query("INSERT INTO campos VALUES (NULL, '".$nome."', '".$rg."', '".$cpf."', '".$cep."', '".$rua."', '".$numero."', '".$bairro."', '".$cidade."', '".$uf."', '".$email."');");

echo "<script> if(confirm(' Cadastrado com sucesso!')){ window.location.href=\"index.html\"; }
else{ window.location.href=\"index.html\";}
</script>";

?>