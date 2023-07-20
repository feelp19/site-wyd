<?php
/**
 * Created by PhpStorm.
 * User: feeli
 * Date: 22/07/2017
 * Time: 02:09
 */

if(empty($_GET['manut']) && empty($_GET['data'])){
    echo "Campos Vazios, Verifique";
}else{

    function __autoload($class){
        include_once "Classes/" . $class . ".class" .".php";
    }
    $mn = new Manu;
    $mn->setNome($_GET['manut']);
    $mn->setData($_GET['data']);
    if($mn->Cadastrar()){
        echo "Manutencao Cadastrada <br/>";
    }else{
        echo "Erro ao Cadastrar Manutencao";
    }
}
?>
<html>
<a href="../site-new-star/index.php"> Voltar</a>
</html>