<?php
session_start();
if(isset($_POST['login']) && isset($_POST['password']))
{
 // connexion à la base de données
//  $db_username = 'root';
//  $db_password = 'mot_de_passe_bdd';
//  $db_name = 'nom_bdd';
//  $db_host = 'localhost';
//  $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
//  or die('could not connect to database');

 $hotebdd = "10.20.0.4";
 $nombdd = "bddapp";
 $utilbdd = "root";
 $mdpbdd = "azerty";
 $db = mysqli_connect($hotebdd, $utilbdd, $mdpbdd,$bddapp)
 or die('could not connect to database');

 
 // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
 // pour éliminer toute attaque de type injection SQL et XSS
 $login = mysqli_real_escape_string($db,htmlspecialchars($_POST['login'])); 
 $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
 
 if($login !== "" && $password !== "")
 {
 $requete = "SELECT count(*) FROM utilisateur where 
 login = '".$login."' and password = '".md5($password)."' ";
 $exec_requete = mysqli_query($db,$requete);
 $reponse = mysqli_fetch_array($exec_requete);
 $count = $reponse['count(*)'];
 if($count!=0) // nom d'utilisateur et mot de passe correctes
 {
 $_SESSION['login'] = $login;
 header('Location: main.php');
 }
 else
 {
 header('Location: login2.php?erreur=1'); // utilisateur ou mot de passe incorrect
 }
 }
 else
 {
 header('Location: login2.php?erreur=2'); // utilisateur ou mot de passe vide
 }
}
else
{
 header('Location: login2.php');
}
mysqli_close($db); // fermer la connexion
?>