<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php 
            $_a = 7;
            $_b = 8;

            if($_a > $_b){
                echo "Seu valor é: " . $_a;
            } else if($_a < $_b){
                echo "Seu valor é: " . $_b;
            } else {
                echo "Os valores A e B são iguais.";
            }
        ?> 
    </body>
</html>