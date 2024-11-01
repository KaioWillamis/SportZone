<?php
include "funcoes.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];

    if(validacaoNome($nome) == false || validacaoEmail($email) == false || validacaoidade($idade) == false){
        header("Location: entre_contato.html?erro=1");
        exit();
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