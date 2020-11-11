<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php                    
        $_agenda = array( "nome" => "Erick",
                            "telefone" => "(11)96701-8114",
                            "salario" => 4597.50);

        foreach($_agenda as $_contato => $_valor){
                echo $_contato . ":" . $_valor . "<br>";
        }
    ?>
</body>
</html>