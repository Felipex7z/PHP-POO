<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php 
   require_once 'class.luta.php';
   $l = new lutador("danilo", "goias ", 30, 90.75,  11, 2, 1);
   $l->Status();
   
   $l1 = new lutador("carlos", "frança", 20, 70.9,20,3,5);
   $l1->Status();
   $l2 = new lutador("augusto", "veneza", 19, 60.9,4,3,5);
   $l2->Status();
   $l3 = new lutador("flavio", "italia", 34, 80.9,7,3,5);
   $l3->Status();
   $l3->apresentar();
   
   ?>
    
</body>
</html>