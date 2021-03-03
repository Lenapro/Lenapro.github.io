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
            height: 600px;
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
                  <a class="nav-link active" aria-current="page" href="Acceuil.php">Accueil</a>
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