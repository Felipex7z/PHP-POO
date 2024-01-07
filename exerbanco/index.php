<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php 
    require_once 'class.conta.banco.php';
    $pe1 = new Banco(); //jubileu
    $pe1->abrirConta("CC");
    $pe1->setDono("jubileu");
    $pe1->setNumconta(111);
    $pe1->Depositar(400);
    $pe1->Sacar(204);
    $pe1->pagarMensal(12);
    print_r($pe1);

    $pe2 = new Banco();//cleusa
    $pe2->abrirConta('CP');
    $pe2->setDono("creusa");
    $pe2->setNumconta(222);
    $pe2->Depositar(600);
    $pe2->Sacar(1000);
    $pe2->pagarMensal(20);
    print_r($pe2);
    
    
    
    ?>
    </pre>
    
    
</body>
</html>