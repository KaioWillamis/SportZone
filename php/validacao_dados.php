<?php
include "funcoes.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];

    if(validacaoNome($nome) == false || validacaoEmail($email) == false || validacaoidade($idade) == false){
        echo "você digitou algo errado";
    }

    else{
        $_SESSION['usuario'] = [
            'nome' => $nome,
            'email' => $email,
            'idade' => $idade
        ];

        header("location: confirma.php");
        exit();
    }
}

else{
    header("location: ../index.html");
    exit();
}
?>