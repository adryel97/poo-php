
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Aula 04 - PHP POO</title>
</head>
<body>
    <pre>
    <?php
        require_once 'Caneta.php';
        $c1 = new Caneta("Bic", "Azul", "0.5");
        $c2 = new Caneta("JIST", "Vermelha", "1.5");
        
        print_r($c1);
        print_r($c2);
        //$c1->modelo = "Ric"; ERRO porque o sómente usando o método set para acessar
        //$c1->ponta = 0.4; 
    ?>
    </pre>
</body>
</html>
