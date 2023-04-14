<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProfDeMath</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
    <body class="d-flex flex-column min-vh-100">
        <div class="container">

        <form action="check.php" method="POST">
        <h1>Connexion</h1>
            <label><b>Login</b></label>
            <input type="text" class="form-label" placeholder="Entrer le nom d'utilisateur" name="login" required>

            <label><b>Mot de passe</b></label>
            <input type="password" class="form-label" placeholder="Entrer le mot de passe" name="password" required>

            <input type="submit" id='submit' value='LOGIN' >

            <?php
            if(isset($_GET['erreur'])){
                $err = $_GET['erreur'];
                if($err==1 || $err==2)
                echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
        </form>
        </div>
    </body>
</html>