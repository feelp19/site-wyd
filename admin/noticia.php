<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="utf-8">
            <title><?php
                    require_once '../Classes/Titulo.class.php';
                    $titt = new Titulo();
                    $titt->Title();
                    ?></title>
        </head>

        <body>
            <form method="POST" action="cadastranoticia.php">
                <input type="text" name="nome" placeholder="nome da noticia">

                <input type="text" name="desc" placeholder="desc da noticia">

                <input type="submit" value="cadastrar">
            </form>
        </body>
    </html>