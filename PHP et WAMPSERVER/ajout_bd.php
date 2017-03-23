<?php

include_once('connexion.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
$Utilisateur_ID = isset($_POST['Utilisateur_ID']);
$Utilisateur_Prenom = isset($_POST['Utilisateur_Prenom']);
$Utilisateur_Nom = isset($_POST['Utilisateur_Nom']);
$Utilisateur_Pseudo = isset($_POST['Utilisateur_Pseudo']);
$Utilisateur_Mdp = isset($_POST['Utilisateur_Mdp']);

 // Insert data into data base
 $sql = "INSERT INTO utilisateur (Utilisateur_ID, Utilisateur_Prenom, Utilisateur_Nom, Utilisateur_Pseudo, Utilisateur_Mdp) VALUES ('' , '" . $Utilisateur_ID . "', '" . $Utilisateur_Prenom . "', '" . $Utilisateur_Nom . "', '" . $Utilisateur_Pseudo . "', '" . $Utilisateur_Mdp . "');";
 

 $qur = $bdd->query($sql);
 if($qur){
 $reponse["success"] = 1; 
 $reponse["message"] = "Données bien insérées";
 echo json_encode($reponse);
 }else{
 $reponse["success"] = 0; 
 $reponse["message"] = "Oops! Erreur d'insertion."; 
 echo json_encode($reponse);
 }
}else{
 $reponse["success"] = 0; 
 $reponse["message"] = "Champ(s) manquant(s)"; 
 echo json_encode($reponse);
}

mysqli_close($bdd);


?>