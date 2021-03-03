<?php
    require 'modelconnexion.php';

    $nom = $_POST['Nom'];


    $email= $_POST['Email'];
    
    $password= $_POST['Password'];

    $requete="INSERT INTO utilisateur (nom, email, password) VALUES ('$nom','$email','$password')";
    if (mysqli_query($conn, $requete)) {  
      session_start();
        $_SESSION['nom'] = $nom;
         header('location:Acceuil.php');
      } else {
        echo "Error: " . $requete . "<br>" . mysqli_error($conn);
      }
    $conn->close();

?>