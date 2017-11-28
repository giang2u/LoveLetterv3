<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Création d&#39;un design étape par étape - Etape n°1 : Le code xhtml</title>
  </head>
  
  <body>
  <div id="conteneur">    
    <h1 id="header"><a href="#" title="Colored Design - Accueil"><span>Colored Design</span></a></h1>


<?php 

include 'Carte.php';

$c = new Carte("Princess");

$r = rand(1,15);



$rr = rand(1,15);

echo $r;

echo $rr;

var_dump($c);

?>

 </body>
</html>