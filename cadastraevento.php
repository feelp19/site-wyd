<?php
/**
 * Created by PhpStorm.
 * User: feeli
 * Date: 28/07/2017
 * Time: 12:25
 */
if(empty($_POST['nome']) AND empty($_POST['descri'])) {
    echo 'Campos Vazios <a href="admin/evento.php">Voltar</a>';
}else {
    function __autoload($class){
        include_once "Classes/" . $class . ".class" .".php";
    }
    $evt = new Eventos;
    $evt->setNome($_POST['nome']);
    $evt->setDescri($_POST['descri']);
    try {
        if ($evt->insereEvento()) {
            echo "evento " . $evt->getNome() . " cadastrado";
        }
    } catch (Exception $e) {
            echo $e->getMessage("Erro ao Cadastrar");
        }
    }

