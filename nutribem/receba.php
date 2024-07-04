<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recebedados</title>
</head>
<body>
    <?php
    $conexao= mysqli_connect("localhost","root","","login");
    if($conexao){
        echo"não conectado<<<,";
    }
    echo"conectado ao banco>>>>>>>";
    
$cpf = $_POST['cpf'];
$cpf = mysqli_real_escape_string($conexao,$cpf);
$sql = "SELECT cpf FROM login.usuarios WHERE cpf='$cpf'";
$retorno = mysqli_query($conexao,$sql);
if(mysqli_num_rows($retorno)>0){
    echo"CPF JÁ CADASTRADO!<br>";

}else{
    $cpf = $_POST['cpf'];
    $nome =$_POST['nome'];
    $email = $_POST['email'];

    $sql = "INSERT INTO login.usuarios(cpf,idade,nome) values('$cpf','$nome','$email')";
    $resultado = mysqli_query($conexao,$sql);
    echo">>USUÁRIO CADASTRADO COM SUCESSO!<br>";
    echo"<a href='cadastro.html'>VOLTAR</a>";
}
    
</body>
</html>