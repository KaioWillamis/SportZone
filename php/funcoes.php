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
    if($idade == 0){
        return false;
    }
    else{
        return true;
    }
}
?>