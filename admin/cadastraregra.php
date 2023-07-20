<?php
    if(empty($_POST['regra'])){
        echo "Campos Vazios !";
    }else{
        require_once '../Classes/Regras.class.php';
        require_once '../Classes/Conexao.class.php';

        $rule = new Regras();
        $rule->setRegras($_POST["regra"]);
        
        if($rule->insereRegra()){
            echo "Regra Cadastrada com sucesso";
        }else{
            echo "Erro ao Cadastrar Regra1";
        }

        header("Location:regra.php");
    }
?>