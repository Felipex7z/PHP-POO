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
    require_once 'class.caneta.php';
    $caneta1 = new Caneta();
    $caneta1->setModelo('BIC');
    $caneta1->setPonta('0.5');
    print_r($caneta1)

    
    
    ?>
    </pre>
    
</body>
</html>