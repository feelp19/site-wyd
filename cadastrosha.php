<?php

if(empty($_POST["id"]) && empty($_POST["senha"])){
    echo "um ou mais requisitos não foram atendidos";
}else{
    require_once 'Classes/CadastroShadow.class.php';

    $cas = new CadastroSha();
    $cas->registro();
}
?>

