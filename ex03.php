<?php
define('TAUX_TVA',20);
define('DEVISE','MAD');

$prix = 60;
$quantite = 3;
$total = $prix * $quantite;

$tva = ($total * TAUX_TVA) / 100;

$total_TTC = $total + $tva;
$total_TTC += 15;


?>
<!DOCTYPE html>
<html>
<body>

<p><?php echo "Le prix total de ". $quantite . " avec un prix unitaire de ". $prix . " et des frais de livraison de 15 DH, est ". $total_TTC?></p>

<h4> is TAUX_TVA Defiend : <?php echo defined('TAUX_TVA')?>;</h4>

</body>
</html>