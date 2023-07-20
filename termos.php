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

    <!-- Template styles -->
    <style rel="stylesheet">
        /* TEMPLATE STYLES */
        
        main {
            margin-top: 3rem;
            ;
        }
         
        main .card {
            margin-bottom: 2rem;
        }
        
        @media only screen and (max-width: 768px) {
            .read-more {
                text-align: center;

            }
        }

        .card{
            margin-top: 3em;
        }

    </style>
</head>

<body>
<main>
        <!--Main layout-->
        <div class="container">

            <!--Page heading-->
            <div class="row wow fadeIn" data-wow-delay="0.2s">
                <div class="col-md-12-ls">
                    <h1 class="h1-responsive"><i class="fa fa-book">   <?php
                                                require_once 'Classes/Titulo.class.php';

                                                $tt = new Titulo();
                                                $tt->Termos();
                                                ?>
                                                </i>
                    </h1>
                </div>
            </div>
            <!--/.Page heading-->
            <hr>

            <div class="jumbotron">
                <h1 class="h1-responsive">Olá, Caro Jogador !</h1>
                <p class="lead">Abaixo segue as regras básicas do Servidor NewStar e Shadow-Destiny:</p>
                <hr class="my-2">
                
                <div class="col-md-12">

                    <div class="card card-warning text-center z-depth-2">
                        <div class="card-block">
                            <p class="white-text"><?php
                                                    require_once 'Classes/Regras.class.php';
                                                     $rg = new Regras();
                                                     $rg->listaRegra();                                                 
                                                    ?>
                            </p>

                        </div>
                    </div>
                    <button type="button" class="btn btn-primary"><a href="index.php" class="white-text">
                    Voltar a Pagina Inicial</a></button>
                </div>

                
                
<!--/.Jumbotron-->
        </div>
</main>
<footer class="page-footer">
        <hr>
        <!--Call to action-->
        <div class="call-to-action">
            <p>Este layout e servidor é baseado nas normas constitutivas perante a legislação e constituição.</p>
                <p>Seguindo firme seus requerimentos perante o CPT, requerendo assim a legalidade e o mantimento no ar.

                Com base no ART.1417 e 308CC.</p>
        </div>
        <!--/.Call to action-->

        <!--Copyright-->
        <div class="footer-copyright">
            <div class="containter-fluid">
                © <?php
                    echo date("Y");
                ?>
                 - New Star Servers
            </div>
        </div>
        <!--/.Copyright-->
    </footer>
    <!--/.Footer-->

    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <script typeee="text/javascript">
    $('input.form-control').maxlength({
            alwaysShow: true,
            threshold: 12,
            warningClass: "label label-success",
            limitReachedClass: "label label-danger"
    });
    </script>
    
    <script>
    new WOW().init();
    </script>
</body>

</html>