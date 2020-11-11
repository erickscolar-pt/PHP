<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php

        $_nome = isset($_POST["nome"]) ? $_POST["nome"] : "Sem definição do nome";
        $_email = isset($_POST["email"]) ? $_POST["nome"] : "Sem definição do e-mail";
        echo "Nome: " . $_nome . "<br>";
        echo "E-mail: " . $_email;
        ?>
    </body>
</html>