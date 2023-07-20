<?php

if(empty($_POST["nome"])  && empty($_POST["desc"])){
    echo "campos vazios";
}else{
    require_once '../Classes/Conexao.class.php';
    require_once '../Classes/Noticia.class.php';

    $nt = new Noticia();
    $nt->setNome($_POST["nome"]);
    $nt->setDescr($_POST["desc"]);
    if($nt->Insere()){
        echo "noticia inserida com sucesso";
    }else{
        echo "erro ao cadastrar";
    }
}
?>