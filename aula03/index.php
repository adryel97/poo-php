
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Aula 03 - POO PHP</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <pre>
    <?php
        require_once'Caneta.php';
        $c1 = new Caneta;
        $c1->cor = "azul";
        //$c1->ponta = 0.5;
        //$c1->carga = 99;
        //$c1->tampada = true;
        $c1->modelo = "BIC cristal";
        $c1->tampar();
        $c1->rabiscar();
        print_r($c1);
    ?>
    </pre>
</body>
</html>
