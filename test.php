<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Création d&#39;un design étape par étape - Etape n°1 : Le code xhtml</title>
  </head>
  
  <body>
  <div id="conteneur">    
    <h1 id="header"><a href="#" title="Colored Design - Accueil"><span>Colored Design</span></a></h1>

		<img src="LoveLetter/web/img/King.png" border="0" />

<?php 

include 'LoveLetter/src/AppBundle/Entity/Carte.php';
include 'LoveLetter/src/AppBundle/Entity/Deck.php';

$c = new Carte('King');

$r = rand(1,15);



$rr = rand(1,15);

echo $r;

echo $rr;

echo $c->getUrl();

echo '<img src="'.$c->getUrl().'" border="0" /></div> ';

$d = new Deck();

$d->melanger();

//$l = $d->getArrayCarte();

	foreach($d->getArrayDeck() as $o) {
		echo $o->getNom()." \n";
	}




?>

	<div> <img src="<?php echo $c->getUrl() ?>" border="0" /></div>

 </body>
</html>