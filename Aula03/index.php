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
            $c1 = new Caneta;
            $c1-> modelo = "Bic caralhuda";
            $c1->cor = "Azul";
            //$c1->ponta = 0.5;
            //$c1->carga= 80;
            //$c1->tampada();
            //$c1->escrever();
            $c1->tampar();
            $c1->rabiscar();
            print_r($c1);
            ?>
        </pre>
    </body>
</html>
