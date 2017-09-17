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
        $t = date("H");
        echo "$t<br>";

        /* CLASES */

        class Hola {

            function Hola() {
                $this->saludo = "Hello World! <br>";
            }

        }

        $saludo_1 = new Hola();
        echo $saludo_1->saludo;


        //LOOPS
        for ($x = 0; $x <= 10; $x++) {
            echo "The number is $x <br>";
        }

        $colors = array("red", "green", "blue", "yellow");

        foreach ($colors as $x) {
            echo "$x <br>";
        }

        //FUNCIONES
        function writeMsg() {
            echo "Hello World!";
        }

        writeMsg();

        function familyName($fname) {
            echo "$fname";
        }

        familyName("Javier Delgado");

        function setHeight($minheight = 50) {
            echo "The height is : $minheight ";
        }

        setHeight();
        
        
        function sum($x, $y) {
            $z = $x + $y;
            return $z;
        }
        
        echo "5 + 10 = " . sum(5, 10) . ""
        
        ?>
    </body>
</html>
