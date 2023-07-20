
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
<form method="POST" action="../cadastraevento.php">
    <input type="text" name="nome" placeholder="nome da noticia">

    <textarea name="descri" placeholder="desc da noticia"></textarea>

    <input type="submit" value="cadastrar">
</form>
</body>
</html>