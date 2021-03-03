<?php
    require 'modelconnexion.php';

    $email= $_POST['Email'];
    
    $password= $_POST['Password'];

    $requete="SELECT * FROM utilisateur WHERE email='$email' AND password='$password'";
    $resultat = $conn->query($requete);
    if ($resultat->num_rows > 0) {
      session_start();
            foreach($resultat as $r){
                $_SESSION['nom'] = $r['nom'];
                header('location:Acceuil.php');
                break;
            }
      } else {
        echo "Error: " . $requete . "<br>" . mysqli_error($conn);
      }
    $conn->close();

?>

