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
        <?php
        // put your code here
        require_once 'Celular.php';
        $MeuCelular1 = new Celular;
        $MeuCelular1->marca = "Motorola";
        $MeuCelular1->modelo = "G5";
        $MeuCelular1->tamanhoDaTela = 5;
        $MeuCelular1->cargaDaBateria = 50;
        $MeuCelular1->tocando = false;
        
        $MeuCelular1->licacao();
        // $MeuCelular1->desligarLigacao();
        $MeuCelular1->tocando();
        print_r($MeuCelular1);
        ?>
    </body>
</html>
