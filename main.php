<html>
 <head>
 <meta charset="utf-8">
 </head>
 <body>
 <div id="content">
 <!-- tester si l'utilisateur est connecté -->
 <?php
 session_start();
 if($_SESSION['login'] !== ""){
 $user = $_SESSION['login'];
 // afficher un message
 echo "Bonjour monsieur $user, vous êtes connecté";
 }
 ?>
 
 </div>
 </body>
</html>