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


//Exercici 3
//Declara dues variables X i Y de tipus INT
//dues variables de tipus double de tipu double i assigna a cadascuna un valor. 

$X = 10;
$Y = 30;
$N = 3.14;
$M = 12.99;

//Per a X i Y 
//Valor de cada variable
echo "<u>Exercici 3</u>" ."<br/>";
echo "Valor de X = ". $X . "<br/>";
echo "Valor de Y = ". $Y . "<br/>";

//La suma
echo "La suma de  X  +  Y  = ". ($X + $Y) . "<br/>";
//La resta
echo "La resta de  Y  -  X  = ". ($Y - $X) . "<br/>";
//El producte
echo "El producte de  X  *  Y  = ". ($X * $Y) . "<br/>";
//El modul
echo "El modul de  X  %  Y  = ". ($Y % $X) . "<br/>";


//Per N i M realitzaràs el mateix.
//valor de cada variable
echo "Valor de M = ". $M . "<br/>";
echo "Valor de N = ". $N . "<br/>";
//La suma
echo "La suma de  M  +  N  = ". ($M + $N) . "<br/>";
//La resta
echo "La resta de  M  -  N  = ". ($M - $N) . "<br/>";
//El producte
echo "El producte de  M  *  N  = ". ($M * $N) . "<br/>";
//El modul amb flotants no funciona, es necesita el fmod
echo "El modul de  M  %  N  = ". fmod($M,$N) . "<br/>";

//Per a totes les variables (X, Y, N, M):

//El doble de cada variable.
$DobleX = $X * 2;
$DobleY = $Y * 2;
$DobleM = $M * 2;
$DobleN = $N * 2;
echo "El doble de X = " . $DobleX . "<br/>";
echo "El doble de X = " . $DobleY . "<br/>";
echo "El doble de M = " . $DobleM . "<br/>";
echo "El doble de N = " . $DobleN . "<br/>";


//La suma de totes les variables.
$SumaTotal = $X + $Y + $M + $N;
echo "La suma total de las variables (30 + 10 + 12.99 + 3.14) = " .$SumaTotal . "<br/>";
//El producte de totes les variables.
$ProducteTotal = $X * $Y * $M * $N;
echo "El producto total de las variables (30 * 10 * 12.99 * 3.14) = " .$ProducteTotal . "<br/><br/>";


//Crea una funció Calculadora que entri dos nombres per paràmetre, i en un tercer paràmetre et permeti fer la suma, la resta, la multiplicació o la divisió dels dos nombres.

echo "<u>Exercici 4</u>" ."<br/>";
function Calculadora($param1, $param2, $opt) {
    // Cuerpo de la función

    if ($opt == 0) {
        echo "Bienvenidos a la calculadora virtual"  ."<br/>";
        echo "Habéis seleccionado la opción de sumar" . "<br/>";
        $Suma = $param1 + $param2;
        echo "El resultado de la suma es : ". $Suma;
      
        
    }

    else if($opt == 1) {

        echo "Bienvenidos a la calculadora virtual"  ."<br/>";
        echo "Habéis seleccionado la opción de restar" . "<br/>";
        $Resta = $param1 - $param2 . "<br/>";
        echo "El resultado de la resta es : ". $Resta;

    }

    else if($opt == 2) {

        echo "Bienvenidos a la calculadora virtual"  ."<br/>";
        echo "Habéis seleccionado la opción de multiplicar" . "<br/>";
        $Multi = $param1 * $param2 . "<br/>";
        echo "El resultado de la multiplicación es : ". $Multi;

    }

    else if($opt == 3) {

        echo "Bienvenidos a la calculadora virtual"  ."<br/>";
        echo "Habéis seleccionado la opción de dividir" . "<br/>";
        $dividir = $param1 / $param2 . "<br/>";
        echo "El resultado de la división es : ". $dividir;


    }


}

Calculadora(20, 15, 0);



//exercici4
//fes un programa que implementi una funció on es compti fins un determinat nombre
//Si no s'inclou un nombre determinat, el nombre haura de tenir un valor per defecte igual a 10
//A mes aquesta funció ha de tenir un segon parametre que indiqui de quant a quant es compta(de 1en 1, d 2 en 2..)
//El compte s'ha de mostrar per pantalla pas a pas

//echo "<u>Exercici 4</u>" ."<br/>";
function contar($num = 10, $increment = 1) {

    for ($i = 0; $i <= $num; $i += $increment) {
        echo $i . "<br/>";
    }

    if ($increment == 1) {
        echo "La cuenta es de 1 en 1" . "<br/>";
    } else if ($increment == 2) {
        echo "La cuenta es de 2 en 2" . "<br/>";

    } else if ($increment == 3) {
        echo "La cuenta es de 3 en 3" . "<br/>";

    } else if ($increment == 4) {
        echo "La cuenta es de 4 en 4" . "<br/>";    

    } else if ($increment == 5) {
        echo "La cuenta es de 5 en 5" . "<br/>";        



    }  else {
        echo "La cuenta es de $increment en $increment" . "<br/>";
    }
   
}


//Ejemplo contando de 5 en 5
contar(19,5);
//Ejemplo contando de 4 en 4
contar(19,4);
//Ejemplo contando de 3 en 3
contar(19,3);
//Ejemplo contando de 2 en 2
contar(19,2);
//Ejemplo contando de 1 en 1
contar(19,1);
//Ejemplo sin valores (por defecto 10)
contar();

echo "<u>Exercici 5</u>" ."<br/><br/>";
function avaluar($nota) {
    if ($nota >= 60 ) {
        echo "Es de primera división" . "<br/>";
    } else if ($nota >= 45) {
        echo "Es de segunda división" ."<br/>";
    } else if ($nota >=33) {
        echo "Es de tercera división" ."<br/>";
    } else  {
        echo "Esta suspendido" . "<br/>";
    }

    

}


avaluar(44) . "<br/>";
avaluar(32) . "<br/>";
avaluar(12) . "<br/>";
avaluar(45) . "<br/>";


//Charlie em va mossegar el dit Charlie et mossegara el dit exactament el 50% del temps
// escriu una funció isBitten() que retorna TRUE amb un 50% de probabilitat i FALSE en cas contrari
echo "<u>Exercici 6</u>" ."<br/>";
echo "Devolver TRUE o FALSE con un 50% de probabilidad" ."<br/>";
function isBitten() {
    return rand(0,1);

}


if(isBitten()){
    echo " Resultado = true";
} else {
    echo "Resultado = false";
}


isBitten();











?>






</body>
</html>


