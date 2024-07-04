<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recebedados</title>
</head>
<body>
<?php
$conexao= mysqli_connect("localhost","root","","login");
if($conexao){
    echo"conectado ao banco<<<,";
}else{
echo"não está conectado ao banco>>>>>>>";
}

$cpf = $_POST['cpf'];
$cpf = mysqli_real_escape_string($conexao,$cpf);
$nome = $_POST['nome'];
$nome = mysqli_real_escape_string($conexao,$nome);
$email = $_POST['email'];
$email = mysqli_real_escape_string($conexao,$email);
$senha = $_POST['senha'];
$senha = mysqli_real_escape_string($conexao,$senha);

$sql = "SELECT cpf FROM login.usuarios WHERE cpf='$cpf'";
$retorno = mysqli_query($conexao,$sql);
if(mysqli_num_rows($retorno)>0){
    echo"CPF JÁ CADASTRADO!<br>";

}else{
    $sql = "INSERT INTO login.usuarios(cpf,nome,email,senha) values('$cpf','$nome','$email','$senha')";
    $resultado = mysqli_query($conexao,$sql);
    echo">>USUÁRIO CADASTRADO COM SUCESSO!<br>";
    echo"<a href='login.php'>VOLTAR</a>";
}
?>
</body>
</html>