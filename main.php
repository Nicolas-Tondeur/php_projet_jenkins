<html>
 <head>
 <meta charset="utf-8">
 </head>
 <body style='background:#fff;'>
 <div id="content">
 <!-- tester si l'utilisateur est connecté -->
 <?php
 session_start();
 if($_SESSION['login'] !== ""){
 $user = $_SESSION['login'];
 // afficher un message
 echo "Bonjour $user, vous êtes connecté";
 }
 ?>
 
 </div>
 </body>
</html>