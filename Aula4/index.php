<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Caneta.php';
        $c1 = new Caneta("Bic","Azul", 0.5);
        //$c1->setModelo("BIC");
        //$c1->setPonta(0.5);      
         $c2 = new Caneta("CANETÃO","Roxa", 1,5);
        print_r($c1);
        print_r($c2);
        //print "Eu tenho uma caneta {$c1 ->getModelo()} de ponta {$c1 ->getPonta()}"
        
        
        ?>
        </pre>
    </body>
</html>
