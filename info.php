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
<!-- Vertical Steppers -->
<!--Jumbotron-->
<div class="jumbotron">
    <h1 class="h1-responsive"><i class="fa fa-sticky-note">  Olá Jogador!</i> </h1>
    <p class="lead">Aqui encontram-se as informações do servidor !</p>
    <hr class="my-2">
        <div class="col-md-12">
                    <table class="table">
                                    <thead>
                                        <tr>
                                        <th>Descrição</th>
                                        
                                        <th>Chance</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <th scope="row">Anct</th>
                                        <td>100%</td>
                                        </tr>
                                        <tr>
                                        
                                        <th scope="row">Experiência</th>
                                        <td>Medium</td>
                                        </tr>
                                        <th scope="row">Drop</th>
                                        <td>Hadd</td>
                                        </tr>
                                        <tr>
                                        <tr>
                                        <th scope="row">+9 ~ +10</th>
                                        <td>95%</td>
                                        </tr>
                                        <th scope="row">+10 ~ +11</th>
                                        <td>100%</td>
                                        </tr>
                                        <th scope="row">+11 ~ +12</th>
                                        <td>90%</td>
                                        </tr><th scope="row">+12 ~ +13</th>
                                        <td>75%</td>
                                        </tr>
                                        <th scope="row">+13 ~ +14</th>
                                        <td>60%</td>
                                        </tr>
                                        <th scope="row">+14 ~ +15</th>
                                        <td>50%</td>
                                        </tr>
                                        
                                    </tbody>
                                    </table>
                                    <p>obs:estas refinações foram baseadas usando a refinação +9 com indice mais favoravél para obter seu anct com sucesso. 
                                        caso use uma refinação inferior, as taxas de refinação poderá cair de 5 a 10% conforme calculo estabelecido pelo servidor.
                                     </p>   
                                       <p> obs2: para refinar de +14 á+15 cuide o tempo de 35á 37 segundos para ter uma chance mais favorável de obter sucesso na refinação do +15</p>
        </div>
         <button type="button" class="btn btn-primary"><a href="index.php" class="white-text">
                    Voltar a Pagina Inicial</a></button>
                </div>
</div>
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