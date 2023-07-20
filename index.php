<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>NewStar</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="bac-cadastro">
   <!--Modal: Login Form-->
    <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog cascading-modal" role="document">
            <!--Content-->
            <div class="modal-content">

                <!--Header-->
                <div class="modal-header light-blue darken-3 white-text">
                    
                    <h4 class="title"><i class="fa fa-user"></i>Login</h4>
                </div>
                <!--Body-->
                <div class="modal-body">
                    <div class="md-form form-sm">
                        <i class="fa fa-envelope prefix"></i>
                        <input type="text" id="form30" class="form-control">
                        <label for="form30">Seu email</label>
                    </div>

                    <div class="md-form form-sm">
                        <i class="fa fa-lock prefix"></i>
                        <input type="password" id="form31" class="form-control">
                        <label for="form31">Sua senha</label>
                    </div>

                    <div class="text-center mt-2">
                        <button class="btn btn-info">Login <i class="fa fa-sign-in ml-1"></i></button>
                    </div>

                </div>
                <!--Footer-->
                <div class="modal-footer">
                    <div class="options text-center text-md-right mt-1">
                        <p>Não tem cadastro? <a href="#">Cadastrar</a></p>
                        <p>Esqueseu a <a href="#">senha?</a></p>
                    </div>
                    <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close <i class="fa fa-times-circle ml-1"></i></button>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!-- Modal -->
        <div class="modal fade" id="noticia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <!--Content-->
                <div class="modal-content ">
                    <!--Header-->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title w-100" id="myModalLabel">Modal title</h4>
                    </div>
                    <!--Body-->
                    <div class="modal-body">
                        ...
                    </div>
                    <!--Footer-->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!--/.Content-->
            </div>
        </div>
        <!-- Modal -->
    <div class="container2">

    <!--Navbar2-->
<nav class="navbar navbar-toggleable-md navbar-dark bg-primary  nav-pricipal ">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav2" aria-controls="navbarNav2" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <br><br>
        <div class="collapse navbar-collapse" id="navbarNav2">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home</a>
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
                        <li class=" dropdown ">
                            <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Jogo</a>
                            <div class="dropdown-menu dropdown" aria-labelledby="dropdownMenu1">
                                <a class="dropdown-item">DropList</a>
                                <a class="dropdown-item" href="historia.php">História</a>
                                <a class="dropdown-item" href="refinacoes.php">Info. da Refinações</a>
                                <a class="dropdown-item">Sobre</a>
                                <a class="dropdown-item">Equipe</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Doações</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://www.forum-gok.com.br/">Forum</a>
                        </li>
                    </ul>
                </div>
        </div>

    </nav>
        <div class="jumbotron">
            <h1 class="h1-responsive">Novidades</h1>
            <hr class="my-2">
            <!-- Nav tabs -->
            <div class="row">
                    <div class="nav-noticias col-md-8">
                        <ul class="nav nav-tabs md-pills pills-ins" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#panel11" role="tab"><i class="fa fa-list"></i> Noticias</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#panel12" role="tab"><i class="fa fa-plus"></i> Eventos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#panel13" role="tab"><i class="fa fa-cogs"></i> Manutenção</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#panel14" role="tab"><i class="fa fa-rss"></i> Patch List</a>
                            </li>
                        </ul>
                    </div>

            <!-- Tab panels -->
                    <div class="tab-content col-md-8">

                        <!--Panel 1-->
                        <div class="tab-pane fade in show active" id="panel11" role="tabpanel">
                            <br>

                            <div class="list-group">
                                <a href="#" data-toggle="modal" data-target="#noticia" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">List group item heading</h5>
                                        <small>3 days ago</small>
                                    </div>
                                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                    <small>Donec id elit non mi porta.</small>
                                </a>
                            </div>
                        </div>
                        <!--/.Panel 1-->

                        <!--Panel 2-->
                        <div class="tab-pane fade" id="panel12" role="tabpanel">
                            <br>
                            <p>
                                <div class="jumbotron">
                                        <?php
                                        function __autoload($class){
                                            include_once "Classes/" . $class . ".class" .".php";
                                        }

                                        $ev = new Eventos;
                                        $ev->listaNomeEvento();

                                        ?>
                            </p>
                                </div>
                        </div>
                        <!--/.Panel 2-- echo "<h3>".$a["nome"]."</h3>" .$a["descr"] ;>

                        <!--Panel 3-->
                        <div class="tab-pane fade" id="panel13" role="tabpanel">
                            <br>

                            <div class="col-md-12">
                                <div class="card card-success text-center z-depth-2">
                                    <div class="card-block">
                                        <?php
                                        require_once 'Classes/Manu.php';
                                        require_once 'Classes/Conexao.class.php';
                                        ?>
                                        <p class="white-text">
                                            <?php
                                            $mn = new Manu;
                                            $mn->listaManu();
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--/.Panel 3-->

                        <!--Panel 4-->
                        <div class="tab-pane fade" id="panel14" role="tabpanel">
                            <br>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro voluptate odit minima.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro voluptate odit minima.</p>

                        </div>
                        <!--/.Panel 4-->

                    </div>
                <div class="col-md-4">
                    <!--Card-->
                    <ul>
                        <div class="card cardD">
                            <!--Card content-->
                            <li><a href="https://mega.nz/#!ZnJ23ILD!0ZVMjNqswijspIeRr8TevAP8xQYAdc4gMYKW9UBiY14">
                                    <div class="card-block">
                                        <!--Title-->

                                        <h4 class="card-title">Download</h4>
                                        <!--Text-->
                                        <p class="card-text">Faça o download do jogo e divirta-se. O jogo sera baixado pelo servidor mega.nz.</p>
                                    </div>
                                </a></li>
                            <!--/.Card content-->

                        </div>
                    </ul>
                    <ul>
                        <div class="card cardC">
                            <!--Card content-->
                            <li><a href="paginacadastro.php">
                                    <div class="card-block">
                                        <!--Title-->
                                        <h4 class="card-title">Cadastrar
                                        </h4>
                                        <!--Text-->
                                        <p class="card-text">Clique aqui para se cadastrar e iniciar sua aventura !</p>
                                    </div>
                                </a></li>
                            <!--/.Card content-->

                        </div>
                    </ul>

                </div>
            </div>
        </div>
    </div>
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


        <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script src="tes.js"></script>
</body>

</html>