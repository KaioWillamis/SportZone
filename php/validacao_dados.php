<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];

    function validacaoemail($email){
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        else{
            return false;
        }
    }

    function validacaoNome($nome){
        if(is_numeric($nome)){
            return false;
        }
        else{
            return true;
        }
    }

    function validacaoIdade($idade){
        if($idade == 0){
            return false;
        }
        else{
            return true;
        }
    }

    if(validacaoNome($nome) == false || validacaoEmail($email) == false || validacaoidade($idade) == false){
        
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