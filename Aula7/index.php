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
                require_once 'Lutador.php';
                require_once 'Luta.php ';
                
                $l= array();
                
                $l[0] = new Lutador('Pretty boy', 'fr',30,1.75, 68,11,2,1);         
                $l[1] = new Lutador("Putscript", "Br", 29, 1.68, 57.8, 14, 2, 3);
                $l[2] = new Lutador("SnapShadow", "Eua", 35, 1.65, 80.9, 12, 2, 1);
                $l[3] = new Lutador("Dead Code", "Aus", 28, 1.93, 81.6, 13, 0, 2);
                $l[4] = new Lutador("UfoCobol", "br", 37, 1.70, 119.3, 5, 4, 3);
                $l[5] = new Lutador("Nerdaart", "Eua", 30, 1.81, 105.7, 12, 2, 4);
                
                $l[1]->apresentar();
                
             
               
               
               $UEC01 = new Luta();
               $UEC01->marcarLuta($l[4],$l[5]);
               print_r($UEC01);
               $UEC01->lutar();
               
                $l[0]->apresentar();
                $l[1]->apresentar();
            ?>
        </pre>
    </body>
</html>
