<?php

 
if ($bdd = mysqli_connect("127.0.0.1", "root", "", 'examen'))
{
	echo 'connection oki';// Si la connexion a réussi, rien ne se passe.
}
else // Mais si elle rate…
{
	echo 'Erreur'; // On affiche un message d'erreur.
}
?>
