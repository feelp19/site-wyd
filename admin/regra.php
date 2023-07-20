<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="utf-8">
            <title><?php
                    require_once '../Classes/Titulo.class.php';
                    require_once '../Classes/Conexao.class.php';
                    $titt = new Titulo();
                    $titt->Termos();
                    ?></title>
        </head>

        <body>
            <form method="POST" action="cadastraregra.php">

                <input type="text" name="regra" placeholder="regra" required="">

                <input type="submit" value="cadastrar">
            </form>
        </body>
    </html>