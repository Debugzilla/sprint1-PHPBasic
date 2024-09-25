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



//Exercici 2
//Imprimeix per pantall "Hello World" utilitzant una variable. en acabat:

echo "<u>Exercici 2</u>" ."<br/>";
$V_Hola = "Hello, World!";

echo $V_Hola . "<br/>";

//transforma tots els caracters de l'string a majuscules i imprimeix en pantalla

$V_Hola = mb_convert_case($V_Hola, MB_CASE_UPPER, "UTF-8");
echo $V_Hola . "<br/>";

//Imprimeix per pantalla la mida (longitud) de la variable.

$Long = strlen($V_Hola);
echo "Longitud del string : ". $Long . "<br/>";

//Imprimeix per pantalla l'string en ordre invers de caràcters.
$O_Invers = strrev($V_Hola);
echo "Orden inverso del string = " .$O_Invers ."<br/>";


//Crea una nova variable amb el contingut “Aquest és el curs de PHP” i imprimeix per pantalla la concatenació de tots dos strings.
$Content = " Aquest és el curs de PHP";
echo $V_Hola  . $Content  ."<br/><br/>";

























?>






</body>
</html>


