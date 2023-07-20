<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery('#ajax_form').submit(function(){
                var dados = jQuery( this ).serialize();

                jQuery.ajax({
                    type: "POST",
                    url: "http://177.54.146.209:8090/site-new-star/cadastro.php",
                    data: dados,
                    success: function( data )
                    {
                        alert( data );
                    }

                });
                alert('Cadastrado com Sucesso');


                return false;
            });
        });
    </script>

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

        .wow{
            padding-top: 1em;
        }

    </style>
</head>

<body >
<!-- Modal -->
<div class="modal fade" id="basicExample2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-full-height modal-top" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <h4 class="modal-title w-100" id="myModalLabel">Banidos</h4>
            </div>
            <!--Body-->
            <div class="modal-body">
                                <p><font><font>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </font><font>Sapiente magnam, sunt, ea dolore eum quod. </font><font>Minima fugiat enim aut soluta is reprehenderit reiciendis quos, qui, amet possimus laborum assumenda voluptate.
                                </font></font></p>

                                <ul class="list-group z-depth-0">
                                    <li class="list-group-item justify-content-between"><font><font>
                                        Cras justo odio
                                         </font></font><span class="badge badge-primary badge-pill"><font><font>14</font></font></span>
                                    </li>
                                    <li class="list-group-item justify-content-between"><font><font>
                                        Dapibus ac facilisis em
                                         </font></font><span class="badge badge-primary badge-pill"><font><font>2</font></font></span>
                                    </li>
                                    <li class="list-group-item justify-content-between"><font><font>
                                        Morbi leo risus
                                         </font></font><span class="badge badge-primary badge-pill"><font><font>1</font></font></span>
                                    </li>
                                    <li class="list-group-item justify-content-between"><font><font>
                                        Cras justo odio
                                         </font></font><span class="badge badge-primary badge-pill"><font><font>14</font></font></span>
                                    </li>
                                    <li class="list-group-item justify-content-between"><font><font>
                                        Dapibus ac facilisis em
                                         </font></font><span class="badge badge-primary badge-pill"><font><font>2</font></font></span>
                                    </li>
                                    <li class="list-group-item justify-content-between"><font><font>
                                        Morbi leo risus
                                         </font></font><span class="badge badge-primary badge-pill"><font><font>1</font></font></span>
                                    </li>
                                </ul>

                            </div>
            <!--Footer-->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fecha</button>
             
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- Modal -->
      <div class="container2">

    <!--Navbar2-->
        <nav class="navbar navbar-toggleable-md navbar-dark bg-primary nav-cadastro">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav2" aria-controls="navbarNav2" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <br><br>
        <div class="collapse navbar-collapse" id="navbarNav2">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="jogo.php">Jogo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tutorial.php">Tutorial</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="https://mega.nz/#!ZnJ23ILD!0ZVMjNqswijspIeRr8TevAP8xQYAdc4gMYKW9UBiY14">Download</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://www.forum-gok.com.br/ticketss/">Suporte</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="modal" data-target="#basicExample2">Banidos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://www.forum-gok.com.br/">Forum</a>
                        </li>
                    </ul>
                </div>
    </div>
</nav>
    </div>
    <main>
        <!--Main layout-->
        <div class="container ">

            <!--Page heading-->
            <div class="row wow fadeIn" data-wow-delay="0.2s">
                <div class="col-md-12-ls">
                    <h1 class="h1-responsive">Cadastre-se Agora !
                    </h1>
                </div>
            </div>
            <!--/.Page heading-->
            <hr>

            <!--First row-->
            <div class="row wow fadeIn" data-wow-delay="0.2s">
                <!--First column-->
                <div class="col-lg-6">
                    <!--Card-->
                  <div class="card">
                    <div class="card-block">

                        <!--Header-->
                        <div class="form-header  purple darken-4">
                            <h3><i class="fa fa-user-plus"></i> Cadastrar-se em <?php require_once'Classes/Titulo.class.php';
                                                                                $tit = new Titulo();
                                                                                $tit->NewStar();
                                                                                ?>:</h3>
                        </div>
                    <form method="post" id="ajax_form">
                        <!--Body-->
                        <div class="md-form">
                            <i class="fa fa-ge prefix"></i>
                            <input type="text" id="form2" class="form-control" name="id" required="">
                            <label for="form2" maxlenght="12">Id</label>
                        </div>

                        <div class="md-form">
                            <i class="fa fa-lock prefix"></i>
                            <input type="password" id="form4" class="form-control" name="senha" required="">
                            <label for="form4" maxlenght="12">Senha</label>
                        </div>
                        
                       <fieldset class="form-group">
                            <input type="checkbox" id="checkbox1"  required="">
                            <label for="checkbox1">Aceita os <a href="termos.php">Termos e Condições</a>? </label>
                        </fieldset>

                        <div class="text-center">
                            <button class="btn btn-deep-purple">Cadastrar   <i class="fa fa-ra"></i>
                        </div>

                        </div>
                    </form>

    <!--Footer-->
            <div class="modal-footer">
                <div class="options">
                    <p>Já é Cadastrado?<a href="index.php"> Clique Aqui</a> para Acessar o Site !</p>
                </div>
            </div>

        </div>
            </div>

                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.2s">
                    <div class="jumbotron">
                        <h1 class="h1-responsive">Olá Jogador !</h1>
                        <p class="lead">Sejam todos bem-vindos ao New Star!</p>
                        <hr class="my-2">
                        <p>Venha conhecer nosso servidor, uma oportunidade única de se aventurar em novos sistemas de Guilds,
                        novas cidades reformuladas, pensando no conforto de cada Player, novas montarias e sistemas de composição inimaginaveis.
                        <p>Conheça nosso servidor, garanto que não irá se arrepender !!!</p>
                        <p>Para começar esta aventura, preencha os campos ao lado com seu Id e Sua Senha.</p>
                        <p>Aaah, e mais uma coisa, caso tenha alguma dúvida ou necessita de ajuda com sua conta, basta entrar em contado com nosso suporte !

                            Bom jogo a Todos ! :)</p>

                        <p>Equipe NewStar</p>
                    </div
                    </div>


        </div>
                </div>
            </div>
            <hr>

        </div>
    </main>

    <div class="rodape">
	  <footer class="page-footer blue">

            <!--Footer Links-->
            <div class="container-fluid">
                <div class="row">

                    <!--First column-->
                    <div class="col-md-6">
                    <h5 class="title">Legislação e Constituição</h5>
                        <p>Este layout e servidor é baseado nas normas constitutivas perante a legislação e constituição.</p>
                        <p>Seguindo firme seus requerimentos perante o CPT, requerendo assim a legalidade e o mantimento no ar. Com base no ART.1417 e 308CC.</p>
                    </div>
                    <!--/.First column-->

                    <!--Second column-->
                    <div class="col-md-6 roda">
                       <h5 class="title">Mapa do site </h5>
                    <div class="row">
                      
                     <div class="col-md-3">
                       
                        <ul>
                            <li><a class="btn btn-primary t" href="index.php">Inicio</a></li>
                            <li><a class="btn btn-primary t" href="tutorial.php">Tutorial</a></li>
                            <li><a class="btn btn-primary t" href="https://mega.nz/#!ZnJ23ILD!0ZVMjNqswijspIeRr8TevAP8xQYAdc4gMYKW9UBiY14">Download</a></li>
                        </ul>
                        </div>
                        <div class="col-md-3 roda">
                        <ul>
                         <li><a class="btn btn-primary t" href="http://www.forum-gok.com.br/ticketss/">Suporte</a></li>
                            <li><a class="btn btn-primary t" data-toggle="modal" data-target="#basicExample2">Banidos</a></li>
                            <li><a class="btn btn-primary t" href="http://www.forum-gok.com.br/">Forum</a></li>
                        </ul>
                        </div>
                        </div>
                    </div>
                    <!--/.Second column-->
                </div>
            </div>
            <!--/.Footer Links-->

            <!--Copyright-->
            <div class="footer-copyright">
                <div class="container-fluid">
                    © 2017 Copyright: NewStar</a>

                </div>
            </div>
            <!--/.Copyright-->

        </footer>
        <!--/.Footer-->
            
	
	</div>
    <!--/.Footer-->

    <!-- SCRIPTS -->
    <script type="text/javascript" src="ajax.js"></script>
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