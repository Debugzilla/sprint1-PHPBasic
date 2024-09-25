<html>
<head>
    <title>Exercicis de PHP</title>
</head>
<body>

<?php


 // exercici 1 defineix una variable de cada tipus: integer,double,string,boolean
//imprimeixles per pantalla.
//despres crea una constant que inclogui el teu nom i mostraho en format titol per pantalla

$ValorNumerico = 30; //variable integer
$ValorDouble = 3.14; //variable Double
$ValorString = "Hola"; //Variable string
$ValorBool = True; //Variable boolean

define("Nom", "Arnau");

echo "<u>Exercici 1</u>" ."<br/>";
echo "Variable integer = " .$ValorNumerico . "<br/>";
echo "Variable Double = " .$ValorDouble . "<br/>";
echo "Variable String = " .$ValorString . "<br/>";
echo "Variable Boolean = " .$ValorBool . "<br/>";
echo "<h1>".Nom ."</h1>"; //visualitza la constant en format titol

















?>






</body>
</html>


