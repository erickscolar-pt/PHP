<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php 
            $_idade = 17;
            $_sexo = "masculino";
            $_identidade = true;

            if($_idade >= 18 && $_sexo == "feminino" && $_identidade === true){
                echo "Pode entrar na festa";
            } else if($_idade >= 18 && $_sexo == "masculino" && $_identidade === true){
                echo "Para entrar tem que pagar 15 reais";
            } else if($_idade <= 18 || !$_identidade){
                echo "Não pode entrar na festa";
            }
        ?>
    </body>
</html>