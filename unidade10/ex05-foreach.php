<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php                    
        $_salada = array("LARANJA","UVA","ABACATE","MAÇÃ","CEREJA","BANANA","MELANCIA","teste");

        foreach($_salada as $_frutas){
            echo $_frutas . "<br>";
        }
    ?>
</body>
</html>