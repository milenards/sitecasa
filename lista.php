<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem</title>
    
</head>
<body>

<h1>Listagem de todos os logins </h1>
    <?php
    $conexao = mysqli_connect("localhost", "root", "", "login");
    $sql_pesquisar = "select * from login";
    $resultado = mysqli_query($conexao, $sql_pesquisar);
    while($linha = mysqli_fetch_assoc($resultado)){
        echo "Nome dos emails:{$linha['email']} ";
        echo "senhas:{$linha['senha']} ";
        echo "<br>";
    }
    mysqli_close($conexao);
    ?>
       
    
</body>
</html>