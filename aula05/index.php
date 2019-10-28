
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Aula03 - POO PHP</title>
</head>
<body>
    <pre>
        <?php
            require_once'ContaBanco.php';

            $p1 = new ContaBanco(); //Creusa
            $p2 = new ContaBanco();//Jubileu
            
            
            $p1->abrirConta("CP");
            $p1->setDono("Creusa");
            $p1->setNumConta(11111);

            $p2->abrirConta("CC");
            $p2->setDono("Jubileu");
            $p2->setNumConta(22222);

            $p1->sacar(1000);

            $p1->depositar(500);
            $p2->depositar(300);

            $p1->pagarMensal();
            $p2->pagarMensal();

            $p1->sacar(630);
            $p2->sacar(338);

            $p1->fecharConta();
            $p2->fecharConta();
            print_r($p1);
            print_r($p2);
        ?>
    </pre>
</body>
</html>
