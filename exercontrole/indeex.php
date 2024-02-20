<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>controle remoto</h1>
<pre>
<?php 
    require_once 'class.controle.php';
    $controle1 = new Controleremoto();
    $controle1->ligar();
    $controle1->menosVolume();
    $controle1->abrirMenu();
    $controle1->maisVolume();
    
    
    
    
    ?>
    </pre>
</body>
</html>