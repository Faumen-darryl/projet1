<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit(); 
  }
?>
<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="../style.css" />
  <style type="text/css">
    body{   
      background:url("image/b.jpg") 
       fixed no-repeat;
       background-size: 100% 100%;
     }
  </style>
  </head>
  <body>
    <div class="sucess">
    <h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
    <p>C'est votre espace admin.</p>
    <a href="add_user.php">ajouter un utilisateur</a> | 
    <a href="#">modifier un utilisateur</a> | 
    <a href="#">supprimer un utilisateur</a> | 
    <a href="../logout.php">Déconnexion</a>
    </ul>
    </div>
  </body>
</html>