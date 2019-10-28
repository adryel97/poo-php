<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Aula 02 - POO PHP</title>
</head>
<body>
    <?php
        require_once 'Caneta.php';
        $c1 = new Caneta; //Extanciando a classe e preenchendo os atribustos
        $c1->cor = "azul";
        $c1->ponta = '0.1';
        $c1->tampada = false;

        $c1->destampada(); //chamando o método e modificando
        $c1->rabiscar(); //chamando o método
    ?>
</body>
</html>
