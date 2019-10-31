<?php
// pegar os dados da tabela

$email = $_POST["email"];
$senha = $_POST["senha"];

/*
echo"E-mail :".$email;
echo"<br>Senha: ".$senha;
*/

// abrir a conexão com o banco de dados

$con = mysqli_connect("localhost","root","","aulaprojeto");

// montar a instrução de seleção para ir ao banco
$sql = "select * from usuario where email = '".$email."' and senha ='".$senha."'";

// execuar a instruçao
if(mysqli_query($con,$sql)){
    echo "Encontrei";
}else{
    echo "Não encontrei";
}



?>