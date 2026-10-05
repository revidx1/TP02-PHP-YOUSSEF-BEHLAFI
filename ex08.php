<?php

echo "<h1>Exercice 8 | Q1 </h1>";
$number = -1;
while ($number <= 20) {
    
    if ($number % 2 == 0) {
        if ($number == 10) {
            echo "<strong>$number</strong><br>";
            
        } 
        else {
            echo $number. "<br>";
        }
    }
    $number++;
}

echo "<h1>Exercice 8 | Q2 </h1>";

echo "<h4> Boucle while </h4>";
$compteur = 5;
$num_while = 0;
while ($compteur < 5 ) {
    echo "Ceci est la répétition n°$num_while <br>";
    $num_while++;
}

echo "<br><br>";

echo "<h4> Boucle do while </h4>";
$compteur = 5;
$num_do_while = 0;
do {
    echo "Ceci est la répétition n°$num_do_while <br>";
    $num_do_while++;
}while ($compteur < 5 );

echo "<h1>Exercice 8 | Q3 </h1>";

for ($i = 1; $i <= 20; $i++) {
    if ($i == 16){
        break;
    }
    elseif ($i % 3 == 0) {
        continue;
    }
    echo $i . "<br>";
}





?>

<br><br><br><br>
    <a href="index.php"><?= "Main page"?></a>