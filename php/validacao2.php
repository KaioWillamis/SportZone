<?php
include "funcoes.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];

    if(validacaoNome($nome) == false || validacaoEmail($email) == false || validacaoidade($idade) == false){
        indicarDeErro($nome,$email,$idade);
    }

    else{
        $_SESSION['usuario'] = [
            'nome' => $nome,
            'email' => $email,
            'idade' => $idade
        ];

        header("location: ../index.html");
        exit();
    }
}

else{
    header("location: ../index.html");
    exit();
}
?>