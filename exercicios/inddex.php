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
   $caneta1 = new Caneta("rosa", "0.5", "bite");
   print_r($caneta1);

$caneta2 = new Caneta("c1", "0.6", "rosa");
print_r($caneta2);

    
    
    ?>
    </pre>
    
</body>
</html>