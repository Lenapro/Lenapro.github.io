<?php
require 'modelconnexion.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Acceuil.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./assets/vendors/jquery/jquery-ui-1.12.1/jquery-ui-1.12.1.custom/jquery-ui.min.css">
    <title>Document</title>
    <style>
        .contain {
         margin-left: 20%;
        }
        li{
            margin-left: 20%;
        }
        .search{
            margin-top: 4%;
        }.autres{
            margin-left: 7%;
        }
        .rechercher{
            width: 60%;
            padding-top: 1%;
            margin-left: 20%;
            padding-bottom: 1%;
        }
        .bd{
            background-image: url("images/madives.jpg");
            width: 100%;
            height: 550px;
        }
        .text{
            padding-top: 15%;
        }
        .form{
            padding-top: 2%;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
          <div class="container-fluid" >
          <a class="navbar-brand" href="#">
          <img src="logo_large.png" class="rounded-3" width="120px" height="80">
          </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Vacances.php">Vacances</a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link " href="Aides.php" tabindex="-1" >Aides </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="Contacts.php" tabindex="-1" >Contacts </a>
                  </li>
                  <?php
                  if(isset($_SESSION['nom'])){
                  ?>
                  <li class="nav-item">
                    <a class="nav-link " href="#" tabindex="-1" > <?= $_SESSION['nom']  ?> </a>
                  </li>
                  </ul>
                  <a class="nav-link " href="deconnexion.php" tabindex="-1" >
                <button class="btn btn-outline-primary" style="border-radius: 110px 110px 110px 110px;">Déconnexion</button>
                  </a>
                  <?php
                  }
                  else{
                  ?>
                 <li class="nav-item">
                    <a class="nav-link " href="connexion.php" tabindex="-1" > Connexion </a>
                  </li>
                  </ul>
                  <a class="nav-link " href="inscription.php" tabindex="-1" >
                <button class="btn btn-outline-primary" style="border-radius: 110px 110px 110px 110px;">Inscription</button>
                  </a>
                  <?php
                  }
                  ?>
                  
           
                
            </div>
          </div>
        </nav>        
      </header>
      <?php
      $requete="SELECT * FROM voyage";
      $resultat=$conn->query($requete);
      $conn->close();

      ?>

   
      <div class="bd">
      <div class="container-fluid" style="margin-top:80px">
        <nav class="nav justify-content-center" style="padding-top:30px" >
          <a class="nav-link autres" style="color:white" href="Vosvoyages.php">
            Vos voyages
            <span class="badge bg-light text-dark rounded-pill align-text-bottom">27</span>
          </a>
          <a class="nav-link autres" style="color:white" href="explorer.php">Explorer </a>
          <a class="nav-link autres" style="color:white" href="Trajets.php">Trajets les plus demandés</a>
          <a class="nav-link autres" style="color:white" href="Partenaires.php">Partenaires</a>
          <a class="nav-link autres" style="color:white" href="Droits.php">Droits</a>
        </nav>
      </div>
        <div class=" text" style="color: white; padding-top:12%">
                <h1 class="text-center">
                    Trouvez et reservez un séjour parfait au meilleur prix
                </h1>
                <form class="text-center" >
                    <div class="form-check form-check-inline" style="padding-top:7%">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">Seul ?</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">Avec son partenaire ?</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                        <label class="form-check-label" for="inlineCheckbox3">En groupe</label>
                      </div>
                      <div class="row g-3" style="margin-left: 23%; margin-top: 2%;">
                        <div class="col-auto">
                          <label for="staticEmail2" class="visually-hidden">Départ</label>
                          <input type="text" class="form-control" value="Votre ville">
                        </div>
                        <div class="col-auto">
                          <label for="inputPassword2" class="visually-hidden">De</label>
                          <input type="date" class="form-control">
                        </div>
                        <div class="col-auto">
                            <label for="inputPassword2" class="visually-hidden">à</label>
                            <input type="date" class="form-control">
                          </div>
                        <div class="col-auto">
                          <button type="submit" class="btn btn-primary mb-3">Rechercher</button>
                        </div>
                      </div>
                </form>
        </div>
      </div>
      <div class="col-md-8" style="display:block;margin-left:auto;margin-right:auto;padding-top:3%">
      <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Lieu</th>
      <th scope="col">Date_heure</th>
      <th scope="col">Destination</th>
      <th scope="col">Tarif</th>
    </tr>
  </thead>
  <tbody>
  <?php
      foreach($resultat as $voyage){
     ?>
       <tr>
      <th scope="row"><?=$voyage['lieu']?></th>
      <td><?=$voyage['date_heure']?></td>
      <td><?=$voyage['destination']?></td>
      <td><?=$voyage['tarif']?></td>
    </tr>
      <?php
      }
      ?>
    
   
  </tbody>
</table>

     


      </div>
            <script>
         function myfunction(){
              alert("Bonjour!")
          }
      </script>
      <script src="./assets/vendors/jquery/jquery-3.5.1.min.js"></script>
        <script
            src="./assets/vendors/bootstrap/bootstrap-4.5.3-dist/bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js"> </script>
        <script src="./assets/vendors/jquery/jquery-ui-1.12.1/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
</body>
</html>