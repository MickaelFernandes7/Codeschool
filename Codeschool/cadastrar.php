<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];
$senhacripto=password_hash($senha, PASSWORD_DEFAULT);

$strcon = mysqli_connect('localhost', 'root', 'root', 'codeschool');
if (!$strcon) {
    die('Não foi possível conectar ao MYSQL');
}

else{
    mysqli_query( $strcon, "SET NAMES 'utf8'" );
    mysqli_query( $strcon, 'SET character_set_connection=utf8' );
    mysqli_query( $strcon, 'SET character_set_client=utf8' );
    mysqli_query( $strcon, 'SET character_set_results=utf8' );}
    
$sql = "INSERT INTO usuario(nome, email, telefone, senha)
VALUES ('$nome', '$email', '$telefone', '$senha')";

$resultado = mysqli_query($strcon,$sql) or die("Erro ao executar a inserção dos dados");
 mysqli_close($strcon);
 echo ("<script>
    alert('Usuário Cadastrado com Sucesso!');
    window.location.href='entrar.html';
    </script>");
    ?>
?>