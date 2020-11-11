<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php 
            $_fumante = true;
            if($_fumante == true){
                echo "Voce é fumante";
            } else if(!$_fumante){
                echo "Voce não é fumante";
            }
        ?>
    </body>
</html>