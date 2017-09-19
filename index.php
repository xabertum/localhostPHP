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
        
        echo "5 + 10 = " . sum(5, 10) . "<br>";
        echo "7 + 13 = " . sum(7,13) . "<br>";
        echo "2 + 4 = " . sum(2,4);
        
        
        //Loop through an associative array
        $age = array("Peter" => 35, "Ben" => 37, "Joe" => 43);
        foreach ($age as $value) {
            echo $value;
        }
        ?>
        
        <br>
        <br>
        
        <?php
        
        //Loop through an associative array
        foreach ($age as $x => $x_value) {
            echo "Key= " .$x . " Value= " .$x_value;
            echo "<br>";
        }
        
        
        //Loop through an indexed array
        $cars = array("Volvo", "BMW", "Toyota");
        $arrlenght = count($cars);
        
        sort($cars);
        for ($x = 0; $x < $arrlenght; $x++) {
            echo $cars[$x];
            echo "<br>";
        }
        
               
        ?>
    </body>
</html>
