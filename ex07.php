<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 7</title>
</head>
<body>

<pre>
<?php
$nombre = 7;

for ($i = 1; $i <= 10; $i++) {
    echo $nombre . " x " . $i . " = " . ($nombre * $i) . "<br>";
}

?>


</pre>    



<pre>
<?php 
for ($ligne = 1; $ligne <= 6; $ligne++) {
    for ($etoile = 1; $etoile <= $ligne; $etoile++) {
        echo "*";
    }
    echo "<br>";
}

?>

</pre>





<br><br><br><br>
    <a href="index.php"><?= "Main page"?></a>
</body>
</html>






















