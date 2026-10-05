# TP02-PHP-YOUSSEF-BEHLAFI
TP 02 PHP — Programmation Web 2 — 2026/2027

# Exercice 2 :
- Dans les questions 4 et 5, l'exercice 2 nous demande de tester les deux variables $note et $Note pour confirmer que PHP traite les deux variables comme différentes variables. On appelle cela la sensibilité à la casse.
- Et dans la partie de la liste des variables, les variables valides sont :
    $a, $_a, $a_a, $AAA, $a1.
- Et non valides :
    $a!, $1a.

# Exercice 4 :
- La fonction 'echo' essaie toujours de covertir les valeurs en chaîne pour les afficher. 'echo' convertit un booleen true, il affiche 1. mais quand il convetit false, il le transforme en une chaîne vide.
- et var_dump() est un outil de debogage. il ne convertit pas la valeur il affiche le type reel de la donnee et son conten u exact ce pourquoi var_dump(false) affiche explicitement bool(false).