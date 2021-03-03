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
<div class="form col-md-7" style="margin-left: 30%; margin-bottom: 10%;">
            <h3 class="mb-5" style="margin-left: 20%;">Connectez-vous</h3>
            <form class="text-center" method="post" action="connexionuser.php">
              
               <div class="row mt-4">
               
                 <div class="col-md-8">
                    <label for="staticEmail2" class="visually-hidden">Email</label>
                    <input type="text" id="email" name="Email" class="form-control" placeholder="Votre Email" required >
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-8">
                     <label for="staticEmail2" class="visually-hidden">Mot de passe</label>
                     <input type="text" id="pass" name="Password" class="form-control" placeholder="Mot de passse" required >
                 </div>
                
            </div>
            
            <div class="row mt-4">
                <div class="col-md-8">
                    <button class="btn btn-outline-primary" type="submit"  style="width: 100%;"> Connexion </button>
                 </div>
            </div>
            </form>
      </div>