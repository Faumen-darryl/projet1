<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit(); 
  }
   // Informations d'identification
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'registration');
 
// Connexion à la base de données MySQL 
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Vérifier la connexion
if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
//MySQL Query to read data
/*$query = mysql_query("select * from produits", $conn);

if(!$query)
  die("Probleme sur la requete ");
else
  die("Produits disponible");

while ($row = mysql_fetch_array($query)) {
  echo $row["nom"];
}

mysql_close();*/
  

?>
<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="style.css" />
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
    <p>C'est votre espace utilisateur.</p>
    <a href="logout.php">Déconnexion</a>
    
    </div>
    <div class="items">

      <div class="item">
        <div class="quantity">20</div>
        <div class="img">
          <img src="./ImagesDeMonSite/Yahourt.jpg" alt="">
        </div>
        <div class="title">
          <span class="price">1000F</span>
          <span>yaourt</span>
          <button class="button_commander">Commander</button>
        </div>
      </div>
      <div class="item">
        <div class="quantity">25</div>
        <div class="img">
          <img src="./ImagesDeMonSite/sac de lait.jpg" alt="">
        </div>
        <div class="title">
          <span class="price">90000F</span>
          <span>sac de lait</span>
          <button class="button_commander">Commander</button>
        </div>
      </div>
      <div class="item">
        <div class="quantity">50</div>
        <div class="img">
          <img src="./ImagesDeMonSite/sac de sucre.jpg" alt="">
        </div>
        <div class="title">
          <span class="price">30000F</span>
          <span>sac de sucre</span>
          <button class="button_commander">Commander</button>
        </div>
      </div>
      <div class="item">
        <div class="quantity">30</div>
        <div class="img">
          <img src="./ImagesDeMonSite/sac de riz.jpg" alt="">
        </div>
        <div class="title">
          <span class="price">10000F</span>
          <span>sac de riz</span>
          <button class="button_commander">Commander</button>
        </div>
      </div>
      <div class="item">
        <div class="quantity">100</div>
        <div class="img">
          <img src="./ImagesDeMonSite/carton de pomme de france.jpg" alt="">
        </div>
        <div class="title">
          <span class="price">20000F</span>
          <span>carton de pomme de france</span>
          <button class="button_commander">Commander</button>
        </div>
      </div>
      <div class="item">
        <div class="quantity">20</div>
        <div class="img">
          <img src="./ImagesDeMonSite/carton_de _olacao.jpg" alt="">
        </div>
        <div class="title">
          <span class="price">15500F</span>
          <span>carton de colacao</span>
          <button class="button_commander">Commander</button>
        </div>
      </div>
      <div class="item">
        <div class="quantity">10</div>
        <div class="img">
          <img src="./ImagesDeMonSite/carton de biscuit DIO.jpg" alt="">
        </div>
        <div class="title">
          <span class="price">12000F</span>
          <span>carton de biscuit DIO</span>
          <button class="button_commander">Commander</button>
        </div>
      </div>
      <div class="item">
        <div class="quantity">30</div>
        <div class="img">
          <img src="./ImagesDeMonSite/seau de chocolat.jpg" alt="">
        </div>
        <div class="title">
          <span class="price">16500F</span>
          <span>seau de chocolat</span> 
          <button class="button_commander">Commander</button>
          
        </div>
      </div><div class="item">
        <div class="quantity">30</div>
        <div class="img">
          <img src="./ImagesDeMonSite/moule de pain.jpg" alt="">
        </div>
        <div class="title">
          <span class="price">3000F</span>
          <span>moule de pain</span>
          <button class="button_commander">Commander</button>
        </div>
      </div>
      <div class="item">
        <div class="quantity">30</div>
        <div class="img">
          <img src="./ImagesDeMonSite/teléviseur.jpg" alt="">
        </div>
        <div class="title">
          <span class="price">200000F</span>
          <span>teléviseur</span>
          <button class="button_commander">Commander</button>
        </div>
      </div>
      <div class="item">
        <div class="quantity">12</div>
        <div class="img">
          <img src="./ImagesDeMonSite/chapin.jpg" alt="">
        </div>
        <div class="title">
          <span class="price">5000F</span>
          <span>chapin</span>
          <button class="button_commander">Commander</button>
        </div>
      </div>
      <div class="item">
        <div class="quantity">10</div>
        <div class="img">
          <img src="./ImagesDeMonSite/pendule.jpg" alt="">
        </div>
        <div class="title">
          <span class="price">15000F</span>
          <span>pendule</span>
          <button class="button_commander">Commander</button>
        </div>
      </div>

    </div>
    <center><h1><a href="admin/home.php">admin</a></h1></center>
    <center><h1><a href="js.html">facture</a></h1></center>
  </body>
</html>