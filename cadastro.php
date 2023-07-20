<?php

    if(empty($_POST['id']) && empty($_POST['senha'])){
        echo "Um ou mais requisitos não foram atendidos";
    }else{
        require_once'Classes/CadastroNew.class.php';
            $cad = new Cadastro();
            $cad->registro();
            
            
        }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>
        <?php
            require_once 'Classes/Titulo.class.php';

            $title = new Titulo();
            $title->Title();
        ?>
    </title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    
    <link href="css/style.css" rel="stylesheet">
</head>
<body class="bac-cadastro">
   <div class"container">
        <div class="card cad-cadastro">
        <h3 class="card-header primary-color white-text">Featured</h3>
        <div class="card-block">
            <h4 class="card-title">Special title treatment</h4>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a class="btn btn-primary" href="index.php">Pagina inicial</a>
            <a class="btn btn-primary" href="paginacadastro.php">Cadastrar em outro server</a>
        </div>
    </div>
    <!--/.Panel-->
   </div>
</body>
</html>
