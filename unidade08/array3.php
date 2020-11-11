<?php
    $_salada = array("Laranja","Uva","Abacate");
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            echo "Existe o elemento ? " . in_array("Laranja", $_salada) . "<br>";
            echo "Qual a posição dele ? " . array_search("Laranja", $_salada) . "<br>";
        ?>
    </body>
</html>