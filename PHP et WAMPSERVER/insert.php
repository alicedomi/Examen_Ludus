<?php


$resultat = mysqli_query($bdd, 'SELECT * FROM utilisateurs');


while($donnees = mysqli_fetch_assoc($resultat))
{
	echo $donnees['Utilisateur_ID'];
	echo "\n";
	echo $donnees['Utilisateur_Pseudo'];
}



?>


