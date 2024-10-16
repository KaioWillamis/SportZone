<?php
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
    if($idade <= 0){
        return false;
    }
    else{
        return true;
    }
}

function indicarDeErro($nome,$email,$idade){
    if(validacaoNome($nome) == false){
        echo "Informe seu nome sem números";
    }
    elseif(validacaoemail($email) == false){
        echo "informe um email válido";
    }
    elseif(validacaoIdade($idade) == false){
        echo "Você digitou um número menor ou igual a zero, por favor informe sua idade verdadeira";
    }
}
?>