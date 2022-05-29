<?php
$conexao = mysqli_connect ("localhost", "root","","login");
$email =$_POST['email'];
$senha =$_POST['senha'];


$sql_inserir = "insert into login (email, senha) values('{$email}', '{$senha}')";

echo"{$email} - {$senha}";
mysqli_query($conexao, $sql_inserir);
mysqli_close($conexao);
?>