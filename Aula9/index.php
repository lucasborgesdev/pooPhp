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
            require_once './Pessoa.php';
            require_once './Livro.php';

            $p[0] = new Pessoa("Pedro", 22, "M");
            $p[1] = new Pessoa("Maria", 31, "F");
            
            $l[0] = new Livro("Livro 1", "Jose Silva", 300, $p[0]);
            $l[1] = new Livro("Livro 2", "Jamil Sauro", 400, $p[1]);
            $l[2] = new Livro("LIvro 3", "Ana paula", 500, $p[1]);
                
            $l[1]->folhear(45);
            $l[0]->detalhes();
        ?>
    </pre>
    </body>
</html>
